<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::view('dashboard', 'user.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'user.profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('settings', 'user.settings')
    ->middleware(['auth'])
    ->name('settings');

require __DIR__.'/auth.php';
