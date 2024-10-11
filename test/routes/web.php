<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProductController;
use App\Models\Employees;
use Illuminate\Support\Facades\Auth;
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
Route::group(['middleware'=>['role:khachhang']],function(){
    Route::get('/movies', function () {
        return view('trang18tuoi');
    })->middleware('auth');
});

Route::group(['middleware'=>['role:admin']],function(){
    Route::resource('product', ProductController::class)->middleware('auth');
    Route::delete('product/{product}/forceDestroy', [ProductController::class, 'forceDestroy'])->name('product.forceDestroy')->middleware('auth');
});
Route::group(['middleware'=>['role:nhanvien']],function(){
    Route::get('/nhanvien', function () {
        return view('nhanvien');
    })->name('nhanvien')->middleware('auth');
    
});

Route::resource('employees', EmployeesController::class);
Route::delete('employees/{employee}/forceDestroy', [EmployeesController::class, 'forceDestroy'])->name('employees.forceDestroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
