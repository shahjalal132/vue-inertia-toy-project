<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/about', function () {
    sleep(1);
    return Inertia::render('About');
});

Route::get('/users', function () {

    $users = User::paginate(10);
    
    // $users = User::paginate(10)->map(fn($user) => [
    //     'id' => $user->id,
    //     'name' => $user->name,
    //     'email' => $user->email,
    // ]);

    return Inertia::render('Users', [
        'users' => $users,
    ]);
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});


Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
