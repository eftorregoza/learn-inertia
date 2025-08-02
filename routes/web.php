<?php

use App\Models\User;
use Illuminate\Support\Facades\Request;
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
        // 'users' => User::paginate(10)->through(fn($user) => [
        //     'id' => $user->id,
        //     'name' => $user->name
        // ])
        'users' => User::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'LIKE', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name
            ]),
        'filters' => Request::only(['search'])
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dump('Logging out...');
    dd('Logged out!');
});
