<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BankAccountController;
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
Route::get('/home', [HomeController::class, 'index'])->name('home');

//user
Route::delete('/home/delete', [UserController::class, 'destroy'])->name('home.delete');
Route::get('/home/edit', [UserController::class, 'edit'])->name('home.edit');
Route::put('/home/update/{id}', [UserController::class, 'update'])->name('home.update');


//bank
Route::get('home/bank/sacar', [BankAccountController::class, 'sacar'])->name('bank.sacar');
Route::get('home/bank/depositar', [BankAccountController::class, 'depositar'])->name('bank.depositar');
Route::put('home/bank/depositarConfirmado', [BankAccountController::class, 'depositConfirm'])->name('bank.depositConfirm');
Route::put('home/bank/sacarConfirmado', [BankAccountController::class, 'withdrawConfirm'])->name('bank.withdrawConfirm');
Route::get('home/bank/relatorio', [BankAccountController::class, 'report'])->name('bank.report');
Route::post('home/bank/relatorio', [BankAccountController::class, 'reportPost'])->name('bank.reportPost');



