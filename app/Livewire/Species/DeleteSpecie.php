<?php

namespace App\Livewire\Species;

use App\Models\Specie;
use LivewireUI\Modal\ModalComponent;

class DeleteSpecie extends ModalComponent
{
    public Specie $specie;

    public function delete()
    {
        $this->specie->delete();
        $this->dispatch('species-updated');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.species.delete-specie');
    }
}
