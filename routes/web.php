<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/cars', [CarsController::class,'index'])->middleware(('auth'));
Route::get('/cars', [CarsController::class,'index']);
Route::get('/cars/createCars', [CarsController::class, 'create']);
Route::get('/cars/{id}', [CarsController::class, 'show']);
Route::delete('/cars/{id}',[CarsController::class, 'destroy']);
Route::post('/cars', [CarsController::class, 'store'] );
Route::get('/admin',[UserController::class, 'index']);
Route::post('/admin',[UserController::class, 'store']);
Route::get('/createDrivers',[DriverController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
