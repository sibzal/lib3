<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::controller(UserController::class)->prefix('/user')->group(function () {
    Route::get('/login', 'loginPage')->name('user.loginPage');
    Route::get('/register', 'registerPage')->name('user.registerPage');
});

Route::controller(\App\Http\Controllers\IndexController::class)->group(function () {
    Route::get('/', 'index')->name('index.index');
});

