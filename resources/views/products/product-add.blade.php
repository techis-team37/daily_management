@extends('layouts.all')

@section('content')

<section id="product-add">

    <h2 class="product-main-title">日用品登録</h2>
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="product-add-form">
        <form action="{{url('/store/')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="file-area">
                <img alt="" class="change-image">
                <h2 class="file-title">画像</h2>
                <label for="file">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M256,0C114.84,0,0,114.84,0,256s114.84,256,256,256s256-114.84,256-256S397.16,0,256,0z M256,475.429
                                    c-120.997,0-219.429-98.432-219.429-219.429S135.003,36.571,256,36.571S475.429,135.003,475.429,256S376.997,475.429,256,475.429z
                                    "/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M256,134.095c-10.1,0-18.286,8.186-18.286,18.286v207.238c0,10.1,8.186,18.286,18.286,18.286
                                    c10.1,0,18.286-8.186,18.286-18.286V152.381C274.286,142.281,266.1,134.095,256,134.095z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M359.619,237.714H152.381c-10.1,0-18.286,8.186-18.286,18.286c0,10.1,8.186,18.286,18.286,18.286h207.238
                                    c10.1,0,18.286-8.186,18.286-18.286C377.905,245.9,369.719,237.714,359.619,237.714z"/>
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </svg>
                </label>
                <input type="file" class="file" id="file" name="image">
            </div>

            <div class="input-text">
                <div class="input-area">
                    <label for="product">商品名</label><span class="alart-tag">必須</span>
                    <input type="text" id="product" class="product" name="product_name">
                </div>
                <div class="input-area">
                    <label for="stock">個数</label><span class="alart-tag">必須</span>
                    <input type="number" id="stock" class="stock" name="stock">
                </div>
                <div class="input-area">
                    <label for="category">カテゴリー</label><span class="alart-tag">必須</span>
                    <select name="category" id="category" class="category">
                        <option value="">選択してください</option>
                        <option value="食品">食品</option>
                        <option value="飲料">飲料</option>
                        <option value="消耗品">消耗品</option>
                        <option value="掃除用品">掃除用品</option>
                        <option value="化粧品">化粧品</option>
                        <option value="医薬品">医薬品</option>
                        <option value="ペット用品">ペット用品</option>
                        <option value="その他">その他</option>
                    </select>
                    <img src="{{ asset('img/triangle.svg') }}" alt="">
                </div>
                <div class="input-area">
                    <label for="tag">タグ</label>
                    <select name="tag" id="tag" class="tag">
                        <option value="">選択してください</option>
                        <option value="キッチン">キッチン</option>
                        <option value="リビング">リビング</option>
                    </select>
                    <img src="{{ asset('img/triangle.svg') }}" alt="">
                </div>
                <div class="input-area">
                    <label for="use_by_date">消費期限</label>
                    <input type="date" id="use_by_date" class="use_by_date" name="use_by_date">
                </div>
                <div class="input-area input-time">
                    <label for="best_by_date">賞味期限</label>
                    <input type="date" id="best_by_date" class="best_by_date" name="best_by_date">
                </div>
            </div>

            <div class="btn-area">
                <button type="submit"><img src="{{ asset('img/add-btn.png') }}" alt=""></button>
            </div>
        </form>
    </div>
</section>

@endsection