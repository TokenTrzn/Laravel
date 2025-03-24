<?php

use App\Http\Controllers\Resource;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource([
    'activities', Resource::class
]);
