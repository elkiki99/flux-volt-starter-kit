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

Route::view('billing', 'user.billing')
    ->middleware(['auth'])
    ->name('billing');

Route::view('settings', 'user.settings')
    ->middleware(['auth'])
    ->name('settings');


Route::view('panel', 'admin.panel')
    ->middleware(['auth', 'verified'])
    ->name('panel');

Route::view('messages', 'admin.messages')
    ->middleware(['auth', 'verified'])
    ->name('messages');

Route::view('reports', 'admin.reports')
    ->middleware(['auth', 'verified'])
    ->name('reports');

Route::view('tasks', 'admin.tasks')
    ->middleware(['auth', 'verified'])
    ->name('tasks');

Route::view('overview', 'admin.overview')
    ->middleware(['auth', 'verified'])
    ->name('overview');

Route::view('calendar', 'admin.calendar')
    ->middleware(['auth', 'verified'])
    ->name('calendar');

Route::view('configuration', 'admin.configuration')
    ->middleware(['auth', 'verified'])
    ->name('configuration');

Route::view('analytics', 'admin.analytics')
    ->middleware(['auth', 'verified'])
    ->name('analytics');

require __DIR__ . '/auth.php';
