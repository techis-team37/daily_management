<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Account;

class AccountController extends Controller
{
   

    /**
     * 会員登録をする処理
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validate($request,[
            'account_name'=>'required|max:20',   
            'email'=>'required|email|min:8|max:255',
            'password'=>'required|max:128',
        ]);

        //会員登録作成
        Account::create([
            'account_name'=> $request->account_name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);
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
    }}
}
