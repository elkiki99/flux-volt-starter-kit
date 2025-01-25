<?php

use App\Http\Controllers\HomePages;
use App\Http\Controllers\AdminPanel;
use App\Http\Controllers\UserDashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureUserIsAdmin;
use App\Http\Middleware\EnsureUserIsNotAdmin;

Route::get('/', [HomePages::class, 'welcome'])->name('welcome');
Route::get('contact', [HomePages::class, 'contact'])->name('contact');
Route::get('about', [HomePages::class, 'about'])->name('about');
Route::get('blog', [HomePages::class, 'blog'])->name('blog');
Route::get('terms', [HomePages::class, 'terms'])->name('terms');

Route::middleware([EnsureUserIsNotAdmin::class])->group(function () {
    Route::get('dashboard', [UserDashboard::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('profile', [UserDashboard::class, 'profile'])->middleware(['auth', 'verified'])->name('profile');
    Route::get('billing', [UserDashboard::class, 'billing'])->middleware(['auth', 'verified'])->name('billing');
    Route::get('settings', [UserDashboard::class, 'settings'])->middleware(['auth', 'verified'])->name('settings');
});

Route::middleware([EnsureUserIsAdmin::class])->group(function () {
    Route::get('panel', [AdminPanel::class, 'panel'])->middleware(['auth', 'verified'])->name('panel');
    Route::get('messages', [AdminPanel::class, 'messages'])->middleware(['auth', 'verified'])->name('messages');
    Route::get('marketing', [AdminPanel::class, 'marketing'])->middleware(['auth', 'verified'])->name('marketing');
    Route::get('tasks', [AdminPanel::class, 'tasks'])->middleware(['auth', 'verified'])->name('tasks');
    Route::get('seo', [AdminPanel::class, 'seo'])->middleware(['auth', 'verified'])->name('seo');
    Route::get('calendar', [AdminPanel::class, 'calendar'])->middleware(['auth', 'verified'])->name('calendar');
    Route::get('configuration', [AdminPanel::class, 'configuration'])->middleware(['auth', 'verified'])->name('configuration');
    Route::get('analytics', [AdminPanel::class, 'analytics'])->middleware(['auth', 'verified'])->name('analytics');
});

require __DIR__ . '/auth.php';
