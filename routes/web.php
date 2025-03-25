<?php

use App\Http\Controllers\Resource;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/{userId}/activities', [Resource::class, 'index']);
Route::resource('activities', Resource::class);