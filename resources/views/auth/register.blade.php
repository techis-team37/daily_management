@extends('layouts.auth')

@section('content')
<div class="register-content">


<div class="form-header">
    <div class="title-area">
        <div class="logo-area">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <div class="project-title-area">
            <p class="project-title">Daily</p>
            <p class="project-title">management</p>
        </div>
    </div>
    <div class="page-title">
        <p class="container-title">ユーザー登録</p>
    </div>
</div>


<form action="{{'/register'}}" method="POST" class="form">

    {{csrf_field()}}

    <div class="form-body">
    <div class="input-area">
            <label for="name">アカウント名</label>
            <input type="text" id="name" class="form-content" name="account_name" required>
        </div>
        <div class="input-area">
            <label for="pass">メールアドレス</label>
            <input type="email" id="pass" class="form-content" name="email" required>
        </div>
        <div class="input-area">
            <label for="pass">パスワード</label>
            <input type="password" id="pass" class="form-content" name="password" required>
        </div>
        <div class="input-area">
            <label for="con_pass">確認用パスワード</label>
            <input type="password" id="con_pass" class="form-content" name="confirmation_password" required>
        </div>
    </div>

    <div class="btn-list">
        <a href="{{ url('login') }}" class="btn-area">
            ログイン<span class="bg"></span>
        </a>
        <div class="btn-area">
            <button class="btn" type="submit">登録</button>
            <span class="bg"></span>
        </div>
    </div>
    </form>

</div>
@endsection
