<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $name = 'John Doe';

    return Inertia::render('Home', [
        'name' => $name
    ]);
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'time' => now()->toTimeString(),
        'users' => User::all()
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dump('Logging out...');
    dd('Logged out!');
});
