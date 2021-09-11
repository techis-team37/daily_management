@extends('layouts.all')

@section('content')

<section id="mypage">

    <div id="add-products-container">
        <div class="add-products-content">
            <a href=""></a>
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

            <h2 class="add-products-title">日用品の登録</h2>
        </div>
    </div>

    <div id="graph">
        <h3 class="content-title">無くなりそうな日用品の在庫</h3>

        <div class="graph-area">
            <ul class="graph-container">
                <li class="graph-content graph-1">
                    <span class="graph-item"></span>
                    <p class="graph-title">〇〇</p>
                </li>
                <li class="graph-content graph-2">
                    <span class="graph-item"></span>
                    <p class="graph-title">〇〇</p>
                </li>
                <li class="graph-content graph-3">
                    <span class="graph-item"></span>
                    <p class="graph-title">〇〇</p>
                </li>
                <li class="graph-content graph-4">
                    <span class="graph-item"></span>
                    <p class="graph-title">〇〇</p>
                </li>
                <li class="graph-content graph-5">
                    <span class="graph-item"></span>
                    <p class="graph-title">〇〇</p>
                </li>
                <li class="graph-content graph-6">
                    <span class="graph-item"></span>
                    <p class="graph-title">〇〇</p>
                </li>
                <li class="graph-content graph-7">
                    <span class="graph-item"></span>
                    <p class="graph-title">〇〇</p>
                </li>
                <li class="graph-content graph-8">
                    <span class="graph-item"></span>
                    <p class="graph-title">〇〇</p>
                </li>
                <li class="graph-content graph-9">
                    <span class="graph-item"></span>
                    <p class="graph-title">〇〇</p>
                </li>
                <li class="graph-content graph-10">
                    <span class="graph-item"></span>
                    <p class="graph-title">〇〇</p>
                </li>
            </ul>
        </div>
    </div>

    <div id="message">
        <h3 class="content-title">みんなの掲示板</h3>
    <div class="message-main-area">

        <ul class="message-container">
            <li class="message-item message-item-1">
                <div class="message-content">
                    <p class="name">母さん</p>
                    <span class="time">何分前</span>
                </div>
                    <p class="body">〇〇と〇〇と〇〇を学校の帰りに買っておいてください。</p>
            </li>
            <li class="message-item message-item-2">
                <div class="message-content">
                    <p class="name">父さん</p>
                    <span class="time">何十分前</span>
                </div>
                    <p class="body">〇〇と〇〇との在庫が切れそうだよ！！</p>
            </li>
            <li class="message-item message-item-3">
                <div class="message-content">
                    <p class="name">母さん</p>
                    <span class="time">何時間前</span>
                </div>
                    <p class="body">〇〇と〇〇を登録しておいたからみんな頼むよ〜！</p>
            </li>
            <li class="message-item message-item-4">
                <div class="message-content">
                    <p class="name">兄さん</p>
                    <span class="time">何日前</span>
                </div>
                    <p class="body">今日〇〇が安かったから追加で入れておくよ〜。</p>
            </li>
        </ul>

        <a href="" class="more-btn">もっと見る<span class="bg"></span></a>
    </div>

    </div>

    <div id="products">
        <h3 class="content-title">日用品一覧</h3>

        <div class="products-area">
            <ul class="products-container">
                <li class="products-content products-content-1">
                    <img src="{{ asset('img/product-1.png') }}" alt="">
                    <div class="product-text-item">
                        <h4 class="category">生活必需品</h4>
                        <h2 class="product-title">トイレットペーパー</h2>
                        <div class="quantity">
                            <p class="quantity-title">残り：</p>
                            <span class="quantity-number">○</span>
                        </div>
                    </div>
                </li>
                <li class="products-content products-content-2">
                <img src="{{ asset('img/product-2.png') }}" alt="">
                    <div class="product-text-item">
                        <h4 class="category">食料品</h4>
                        <h2 class="product-title">人参</h2>
                        <div class="product-time">
                            <p class="product-time-title">賞味期限</p>
                            <span class="product-time-date">○年○月○日○時○分</span>
                        </div>
                        <div class="quantity">
                            <p class="quantity-title">残り：</p>
                            <span class="quantity-number">○</span>
                        </div>
                    </div>
                </li>
                <li class="products-content products-content-3">
                <img src="{{ asset('img/product-1.png') }}" alt="">
                    <div class="product-text-item">
                        <h4 class="category">生活必需品</h4>
                        <h2 class="product-title">トイレットペーパー</h2>
                        <div class="quantity">
                            <p class="quantity-title">残り：</p>
                            <span class="quantity-number">○</span>
                        </div>
                    </div>
                </li>
                <li class="products-content products-content-4">
                <img src="{{ asset('img/product-2.png') }}" alt="">
                    <div class="product-text-item">
                        <h4 class="category">食料品</h4>
                        <h2 class="product-title">人参</h2>
                        <div class="product-time">
                            <p class="product-time-title">賞味期限</p>
                            <span class="product-time-date">○年○月○日○時○分</span>
                        </div>
                        <div class="quantity">
                            <p class="quantity-title">残り：</p>
                            <span class="quantity-number">○</span>
                        </div>
                    </div>
                </li>
            </ul>

            <a href="" class="more-btn">もっと見る<span class="bg"></span></a>
        </div>
    </div>

    </div>

</section>

@endsection