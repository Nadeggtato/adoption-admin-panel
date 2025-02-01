<?php

namespace App\Livewire\Species;

use App\Models\Specie;
use App\Rules\CaseInsensitiveRule;
use LivewireUI\Modal\ModalComponent;

class CreateSpecie extends ModalComponent
{
    public $name;

    public $title;

    public function mount()
    {
        $this->title = 'Test';
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => ['required', 'max: 100', new CaseInsensitiveRule('name', 'species')],
        ]);

        Specie::create($validated);

        $this->dispatch('species-updated');
        $this->closeModal();
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public static function destroyOnClose(): bool
    {
        return true;
    }

    public static function modalMaxWidth(): string
    {
        return 'lg';
    }

    public function render()
    {
        return view('livewire.species.create-specie');
    }
}
