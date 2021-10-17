@extends('layouts.auth')

@section('content')
<div class="login-content">


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
        <p class="container-title">ログイン</p>
    </div>
</div>

@if($msg ?? '' !== null)
    <div class="error-msg">
        <p class="error-text">{{$msg ?? ''}}</p>
    </div>
@endif

<form action="{{'/login'}}" method="POST" class="form">

@if(count($errors) > 0)
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif
    {{csrf_field()}}

    <div class="form-body">
        <div class="input-area">
            <label for="email">メールアドレス</label>
            <input type="text" id="email" class="form-content" name="email" required>
        </div>

        <div class="input-area">
            <label for="pass">パスワード</label>
            <input type="password" id="pass" class="form-content" name="password" required>
        </div>
    </div>

    <div class="btn-list">
        <a href="{{ url('register') }}" class="btn-area">
            新規登録<span class="bg"></span>
        </a>
        <div class="btn-area">
            <button class="btn" type="submit">ログイン</button>
            <span class="bg"></span>
        </div>
    </div>
    </form>

</div>
@endsection
