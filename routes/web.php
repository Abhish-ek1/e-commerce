<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('home', [UserController::class, 'home']);
Route::get('login', [UserController::class, 'login'])->middleware('loggedin');
Route::get('register', [UserController::class, 'register']);
Route::get('save-user', [UserController::class, 'save_user']);
Route::get('login-user', [UserController::class, 'login_user']);
Route::get('test', [UserController::class, 'test'])->middleware('check');
