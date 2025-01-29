<?php

namespace App\Rules;

use Arr;
use Closure;
use DB;
use Illuminate\Contracts\Validation\ValidationRule;
use Str;
use function Laravel\Prompts\select;

class CaseInsensitiveRule implements ValidationRule
{
    private $column;
    private $tableName;

    public function __construct($column, $tableName)
    {
        $this->column = $column;
        $this->tableName = $tableName;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $result = DB::select(
            "SELECT {$this->column}
            FROM {$this->tableName}
            WHERE {$this->column} ILIKE '$value' AND
                deleted_at IS NULL
            LIMIT 1"
        );

        if (count($result) > 0) {
            $fail(Str::ucfirst($this->column) . ' already exists.');
        }
    }
}
