<?php

use App\Livewire\Species\IndexSpecie;
use Illuminate\Support\Facades\Route;

Route::get('/species', IndexSpecie::class)->name('species.index');
