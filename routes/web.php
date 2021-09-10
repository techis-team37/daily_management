<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\AccountController;

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
});


// -----------------------------
//     ログイン
// -----------------------------

// ログイン画面の表示
Route::get('/login',                    function(){ return view('auth.login'); });

// ログイン機能の処理の実装
Route::post('/login',                   [AccountController::class, 'account_login']);

// -----------------------------
//     登録
// -----------------------------

// 登録画面の表示
Route::get('/register',                 function(){ return view('auth.register'); });

// ログイン機能の処理の実装
Route::post('/register',                [AccountController::class, 'account_register']);