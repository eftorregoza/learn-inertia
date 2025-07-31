<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $name = 'John Doe';

    return Inertia::render('Welcome', [
        'name' => $name
    ]);
});


Route::get('/users', function () {
    sleep(1);
    return Inertia::render('Users');
});


Route::post('/logout', function () {
    dump('Logging out...');
    dd('Logged out!');
});