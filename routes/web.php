<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class, 'loginUser'])->name('routeloginUser');
Route::get('/users', [UserController::class, 'listAllUsers'])->name('routeListAllUsers');
Route::get('/users/{uid}', [UserController::class, 'listUser'])->name('ListUser');
Route::match(['get', 'post'], '/login', [AuthController::class, 'loginUser'])->name('login');
