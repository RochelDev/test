<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/home', function () {
    return view('users.home');
})->name('Home');

Route::get('/user', function () {
    return view('users.index');
})->name('user');

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/ministere')->name('ministere.')->group(function () {

        Route::get('/', function () { return view('admin.ministeres.index');})->name('index');
        Route::get('/create', function () { return view('admin.ministeres.create');})->name('create');
        Route::get('/edit', function () { return view('admin.ministeres.edit');})->name('edit');
    });

    Route::get('/', function () { return view('admin.admin');})->name('admin');

});

Route::get('/page', function () {
    return view('users.page');
})->name('Page');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
