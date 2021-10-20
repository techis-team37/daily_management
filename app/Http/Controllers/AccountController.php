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
            'password'=> Hash::make($request->password),
        ]);

        return view('auth.login');
    }
    
    
    /**
     * ログインをする処理
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $account = Account::where('email', $request->email)->first();
        if ($account == false){
            return view('login', ['login_error' => '1']);
        }

        // 一致

        if (Hash::check($request->password, $account->password)) {


            // セッション
            session(['id'  => $account->account_id]);
            session(['name'  => $account->account_name]);
            session(['email' => $account->email]);

            // フラッシュ
            session()->flash('flash_flg', 1);
            session()->flash('flash_msg', 'ログインしました。');
        //
            return redirect('/product/'.$account->account_id);

        // 一致しなかった場合
        }else{
            $msg = 'パスワードが一致しません';
            return view('auth.login',['msg' => $msg]);
        }

    }
}
