<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;
use Inertia\Inertia;

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        $name = 'John Doe';

        return Inertia::render('Home', [
            'name' => $name
        ]);
    });

    Route::get('/users', function () {
        return Inertia::render('Users/Index', [
            // 'users' => User::paginate(10)->through(fn($user) => [
            //     'id' => $user->id,
            //     'name' => $user->name
            // ])
            'users' => User::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                })
                ->orderByDesc('created_at')
                ->paginate(10)
                ->withQueryString()
                ->through(fn($user) => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'can' => [
                        'update' => Auth::user()->can('update', $user)
                    ]
                ]),
            'filters' => Request::only(['search']),
            'can' => [
                'createUser' => Auth::user()->can('create', User::class)
            ],
            'testAttr' => true
        ]);
    });

    Route::get('/users/create', function () {
        return Inertia::render('Users/Create');
    })->can('create', User::class);

    Route::post('/users/create', function () {
        $attributes = Request::validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8)],
        ]);

        $attributes['remember_token'] = Str::random(10);

        User::create($attributes);

        return redirect('/users');
    });

    Route::get('/settings', function () {
        return Inertia::render('Settings');
    });
});
