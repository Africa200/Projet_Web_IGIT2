<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;


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

Route::get('/',[\App\Http\Controllers\MainController::class,'index']);
Route::get('/dashboard', [RestaurantController::class, 'dashboard']);
Route::get('/restaurant', [RestaurantController::class, 'index']);
Route::post('/restaurant/plat', [RestaurantController::class, 'storePlat']);
Route::post('/restaurant/type', [RestaurantController::class, 'storeTypeDePlat']);
Route::delete('/restaurant/plat/{id}', [RestaurantController::class, 'destroyPlat']);
Route::delete('/restaurant/type/{id}', [RestaurantController::class, 'destroyTypeDePlat']);

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);

