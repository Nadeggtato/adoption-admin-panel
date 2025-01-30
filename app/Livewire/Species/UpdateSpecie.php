<?php

namespace App\Livewire\Species;

use App\Models\Specie;
use App\Rules\CaseInsensitiveRule;
use LivewireUI\Modal\ModalComponent;
use Log;

class UpdateSpecie extends ModalComponent
{
    public Specie $specie;

    public string $name;

    public function mount()
    {
        $this->name = $this->specie->name;
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => [
                'required',
                'max: 100',
                new CaseInsensitiveRule('name', 'species', $this->specie->id)
            ],
        ]);

        $this->specie->update($validated);

        $this->dispatch('species-updated');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.species.update-specie');
    }
}
