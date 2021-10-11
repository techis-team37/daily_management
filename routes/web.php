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

Route::get('/', function () {
    return view('auth.login');
})->name('login');

//Route::resource('/account',AccountController::class);

//Route::get('account/view',[AccountController::class,'create']);

Route::get('register',function(){return view('auth.register');});
Route::post('register',[AccountController::class,'register']);
Route::get('login', function(){return view('auth.login');});
Route::post('login',[AccountController::class,'login']);

Route::get('mypage', function(){return view('mypage');});

// Route::resource('/product',ProductController::class);
// 商品一覧画面を表示
Route::get('/product/{id}',[ProductController::class, 'index'])->middleware('login');
// 商品登録画面を表示
Route::get('/create',[ProductController::class, 'create']);
// 商品登録の保存
Route::post('/store/{id}',[ProductController::class, 'store']);
// 商品個別ページの表示
Route::get('/show/{product_id}',[ProductController::class, 'show']);
// 商品編集画面の表示
Route::get('/edit/{product_id}',[ProductController::class, 'edit']);
// 商品編集の保存
Route::PUT('/update',[ProductController::class, 'update']);
// 登録商品の削除
Route::get('/delete/{product_id}',[ProductController::class, 'destroy']);