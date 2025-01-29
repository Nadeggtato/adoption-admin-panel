<?php

namespace App\Livewire\Species;

use App\Models\Specie;
use App\Rules\CaseInsensitiveRule;
use Livewire\Component;

class CreateSpecie extends Component
{
    public $name;

    public function save()
    {
        $validated = $this->validate([
            'name' => ['required', 'max: 100', new CaseInsensitiveRule('name', 'species')],
        ]);

        Specie::create($validated);

        return redirect()->to(route('species.create'));
    }


    public function render()
    {
        return view('livewire.species.create-specie');
    }
}
