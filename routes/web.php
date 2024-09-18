<?php

use App\Http\Controllers\AssetsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UsersController::class, 'login']);
Route::get('/register', [UsersController::class, 'register']);
Route::post('/register', [UsersController::class, 'store']);

Route::resource('penempatan', AssetsController::class);

