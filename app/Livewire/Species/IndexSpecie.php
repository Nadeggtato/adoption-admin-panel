<?php

namespace App\Livewire\Species;

use App\Models\Specie;
use Livewire\Attributes\On;
use Livewire\Component;

class IndexSpecie extends Component
{
    public $species;

    public function mount()
    {
        $this->fetchSpecies();
    }

    #[On('specie-created')]
    public function fetchSpecies()
    {
        $this->species = Specie::all();
    }

    public function render()
    {
        return view('livewire.species.index-specie');
    }
}
