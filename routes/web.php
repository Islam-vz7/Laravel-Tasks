<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Home route: Redirect based on authentication
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    } else {
        return view('auth');
    }
});

// Auth routes (login, register, etc.)
require __DIR__.'/auth.php';

// Authenticated routes
Route::middleware('auth')->group(function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Course routes
    Route::get('/home', [CourseController::class, 'index'])->name('home');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('create');
    Route::post('/courses', [CourseController::class, 'store'])->name('store');
    Route::resource('courses', CourseController::class)->except(['create', 'store']);
});
