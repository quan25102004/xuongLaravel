<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SuckhoeController;
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

Route::get('/tintuc/suckhoe', function () {
    return view('client.suckhoe');
});
Route::get('/tintuc/thethao', function () {
    return view('client.thethao');
});
Route::get('/tintuc/trongnuoc', function () {
    return view('client.trongnuoc');
});
Route::get('/tintuc/ngoainuoc', function () {
    return view('client.ngoainuoc');
});
Route::get('/lienhe', function () {
    return view('client.lienhe');
});
Route::get('/gioithieu', function () {
    return view('client.gioithieu');
});
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('login', function () {
    return view('login');
});
Route::resource('client/home',HomeController::class);
Route::get('client/home/{id}/chitiet', [HomeController::class, 'chitiet'])->name('home.chitiet');
// Route::resource('client/home/{id}',HomeController::class);





Route::resource('admin/posts',PostController::class);
Route::delete('admin/posts/{post}/forceDestroy',[PostController::class,'forceDestroy'])->name('posts.forceDestroy');
Route::get('/posts/trash', [PostController::class,'trash'])->name('posts.trash');
Route::get('/posts/{id}/restore', [PostController::class,'restore'])->name('posts.restore');



Route::resource('admin/categories',CategoryController::class);

