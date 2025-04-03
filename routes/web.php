<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('activities', Resource::class);    
    Route::resource('users', UserController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('rooms',  RoomController::class);
    Route::resource('bookings', BookingController::class);

    Route::get('home', function () {
        return view('home');
    })->name('home');
    Route::get('contact', function () {
        return view('contact');
    })->name('contact');
    Route::get('aboutUs', function () {
        return view('aboutUs');
    })->name('aboutUs');
    Route::get('offer', function () {
        return view('offer');
    })->name('offer');
    Route::get('rooms', function () {
        return view('rooms');
    })->name('rooms');
    Route::get('roomDetails', function () {
        return view('roomDetails');
    })->name('roomDetails');
});

require __DIR__.'/auth.php';
