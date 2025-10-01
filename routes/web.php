<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book/{id}', [BookController::class, 'show']);
