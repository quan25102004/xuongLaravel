<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/transactions/start',[TransactionController::class,'startForm'])->name('transactions.start');
Route::post('/transactions/start',[TransactionController::class,'startTransaction'])->name('transactions.startTransaction');
Route::get('/transactions/continue',[TransactionController::class,'continue'])->name('transactions.continue');
Route::post('/transactions/update',[TransactionController::class,'update'])->name('transactions.update');
Route::post('/transactions/cancel',[TransactionController::class,'cancel'])->name('transactions.cancel');


