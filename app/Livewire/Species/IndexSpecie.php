<?php

namespace App\Livewire\Species;

use App\Models\Specie;
use Livewire\Component;

class IndexSpecie extends Component
{
    public function render()
    {
        return view('livewire.species.index-specie')->with([
            'species' => Specie::all(),
        ]);
    }
}
