<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UsersController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('/larabits/shapes', function() {
    return Inertia::render('Larabits/Shapes');
});

Route::get('/larabits/shapes', function() {
    return Inertia::render('Larabits/Shapes');
});

Route::get('/larabits/shapes2', function() {
    return Inertia::render('Larabits/ShapesTwo');
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Home');
    });

    Route::get('/settings', function () {
        return Inertia::render('Settings');
    });

    Route::get('/users', [UsersController::class, 'index']);

    // Route::get('/users', function () {
    //     return Inertia::render('Users/Index', [
    //         'users' => User::query()
    //             ->when(Request::input('search'), function ($query, $search) {
    //                 $query->where('name', 'like', "%{$search}%");
    //             })
    //             ->paginate(10)
    //             ->withQueryString()
    //             ->through(fn($user) => [
    //                 'id' => $user->id,
    //                 'name' => $user->name,
    //                 'can' => [
    //                     'edit' => Auth::user()->can('edit', $user)
    //                 ]
    //             ]),

    //         'filters' => Request::only(['search']),
    //         'can' => [
    //             'createUser' => Auth::user()->can('create', User::class)
    //         ]
    //     ]);
    // });

    Route::get('/users/create', [UsersController::class, 'create']);

    // Route::get('/users/create', function () {
    //     return Inertia::render('Users/Create');
    // })->middleware('can:create,App\Models\User');


    // 1. add endpoint
    // 2. add policy
    // 3. add inertia view for edit
    // 4. add form to edit page
    // 5. add post endpoint...
    Route::get('/users/edit', function () {
        return Inertia::render('Users/Edit');
    })->middleware('can:,App\Models\User');


    // For latest Laravel Version, which is still not supported by this app.
    // Route::get('/users/create', function () {
    //     return Inertia::render('Users/Create');
    // })->can('create','App\Models\User');
    
    Route::post('/users', [UsersController::class, 'store']);

    // Route::post('/users', function () {
    //     $attributes = Request::validate([
    //         'name' => 'required',
    //         'email' => ['required', 'email'],
    //         'password' => 'required',
    //     ]);

    //     User::create($attributes);

    //     return redirect('/users');
    // });    
});

