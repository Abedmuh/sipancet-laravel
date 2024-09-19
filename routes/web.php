<?php

use App\Http\Controllers\AssetsController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\AuthMidleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/login', [UsersController::class, 'login'])->name('login')->middleware(AuthMidleware::class);
Route::post('/login', [UsersController::class, 'authenticate']);
Route::post('/logout', [UsersController::class, 'logout'])->name('logout');
Route::get('/register', [UsersController::class, 'create']);
Route::post('/register', [UsersController::class, 'store']);

Route::resource('penempatan', AssetsController::class);

