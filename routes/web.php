<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// });

Route::get('login', [UserController::class, 'login'])->middleware('loggedin');
Route::get('register', [UserController::class, 'register']);
Route::get('save-user', [UserController::class, 'save_user']);
Route::get('login-user', [UserController::class, 'login_user']);

Route::get('test', [UserController::class, 'test'])->middleware('check');
