<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book/{id}', [BookController::class, 'show']);
Route::get('/list', [BookController::class, "list"]);
Route::get('/create', [BookController::class, 'create']);
Route::post('/store', [BookController::class, 'store']);
