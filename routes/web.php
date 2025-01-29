<?php

use App\Livewire\Species\CreateSpecie;
use App\Livewire\Species\IndexSpecie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/species', IndexSpecie::class)->name('species.index');
Route::get('/species/create', CreateSpecie::class)->name('species.create');
