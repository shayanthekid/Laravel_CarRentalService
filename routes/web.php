<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RentedController;
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
Route::post('/cars/{id}', [RentedController::class, 'store']);
Route::delete('/cars/{id}',[CarsController::class, 'destroy']);
Route::post('/cars', [CarsController::class, 'store'] );
Route::get('/admin',[UserController::class, 'index']);
Route::delete('/admin/{id}',[RentedController::class, 'destroy']);
Route::post('/admin',[UserController::class, 'store']);
Route::get('/createDrivers',[DriverController::class,'index']);

Route::get('/admin/manageRents',[RentedController::class,'index']);
Route::post('/admin/manageRents/{id}', [RentedController::class, 'edit']);
Route::delete('/admin/manageRents/{id}',[RentedController::class, 'destroy']);
Route::get('/profile/{id}',[RentedController::class, 'ProfileIndex']);
Route::post('/profile/{id}',[RentedController::class, 'Invoice']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
