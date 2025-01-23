<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
Route::view('/blog', 'blog')->name('blog');
Route::view('/terms', 'terms')->name('terms');

Route::view('dashboard', 'user.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'user.profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('settings', 'user.settings')
    ->middleware(['auth'])
    ->name('settings');

Route::view('panel', 'admin.panel')
    ->middleware(['auth', 'verified'])
    ->name('panel');

require __DIR__ . '/auth.php';
