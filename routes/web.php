<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Master\CagyBusicss;
use App\Http\Controllers\Master\AuthController;
use App\Http\Controllers\Master\ProductAddController;
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

Route::get('/', [ProductAddController::class, 'productShow']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'Display'])->name('login');
    Route::post('/login', [AuthController::class, 'login_check'])->middleware('throttle:2,1');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
    Route::resource('product', ProductAddController::class);
    Route::resource('category', CagyBusicss::class);
    Route::get('/logout', [AuthController::class, 'logout']);
});
