<?php

use App\Http\Controllers\Resource;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('greeting', ['name' => 'Alberto']);
});
Route::resource('activities', Resource::class);