<?php

namespace App\Rules;

use Arr;
use Closure;
use DB;
use Illuminate\Contracts\Validation\ValidationRule;
use Str;

class CaseInsensitiveRule implements ValidationRule
{
    private $column;
    private $tableName;

    private $id;

    public function __construct($column, $tableName, $id = null)
    {
        $this->column = $column;
        $this->tableName = $tableName;
        $this->id = $id;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $query = "SELECT {$this->column}
            FROM {$this->tableName}
            WHERE {$this->column} ILIKE '$value' AND
                deleted_at IS NULL ";

        if (!empty($this->id)) {
            $query .= "AND id != '{$this->id}' ";
        }

        $query .= "LIMIT 1";

        $result = DB::select($query);

        if (count($result) > 0) {
            $fail(Str::ucfirst($this->column) . ' already exists.');
        }
    }
}
