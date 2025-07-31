<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $name = 'John Doe';

    return Inertia::render('Welcome', [
        'name' => $name
    ]);
});
