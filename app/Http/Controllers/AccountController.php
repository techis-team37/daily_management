<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * マイページ画面を表示させる処理
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * 会員登録をする処理
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validate($request,[
           
        
    }
    }

    /**
     * ログインをする処理
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $account = Account::where('email', $request->email)->get();
        if (count($account) === 0){
            return view('login', ['login_error' => '1']);
        }
        
        // 一致
        if (Hash::check($request->password, $account[0]->password)) {
            
            // セッション
            session(['name'  => $account[0]->name]);
            session(['email' => $account[0]->email]);
            
            // フラッシュ
            session()->flash('flash_flg', 1);
            session()->flash('flash_msg', 'ログインしました。');
        //
    }
}