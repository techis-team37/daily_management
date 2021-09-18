<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductController;

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

//Route::resource('/account',AccountController::class);
Route::resource('/product',ProductController::class);


Route::get('account/view',[AccountController::class,'create']);

Route::post('register',[AccountController::class,'register']);
Route::post('login',[AccountController::class,'login']);
Route::view('mypage',[AccountController::class,'index']);

Route::get('/product',[ProductController::class, 'index']);
Route::get('/create',[ProductController::class, 'store']);

