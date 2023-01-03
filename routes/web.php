<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;
use App\Http\Controllers\CarMaintenanceController;

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

Route::match(['get', 'post'],'/', function () {
    return redirect()->route('home');
});

Auth::routes();
//home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::delete('/home/delete', [App\Http\Controllers\HomeController::class, 'destroy'])->name('home.delete');

//cars
Route::get('/car/create/', [CarController::class, 'create'])->name('car.create');
Route::post('/car/store/', [CarController::class, 'store'])->name('car.store');
Route::get('/car/edit/{id}', [CarController::class, 'edit'])->name('car.edit');
Route::put('/car/update/{id}', [CarController::class, 'update'])->name('car.update');
Route::delete('/car/destroy/{id}', [CarController::class, 'destroy'])->name('car.destroy');


