<?php

use App\Livewire\Species\CreateSpecie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/species/create', CreateSpecie::class)->name('species.create');
