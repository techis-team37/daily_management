@extends('layouts.all')

@section('content')

<section id="mypage">

    <div id="add-products-container">
        <div class="add-products-content">
            <a href="{{ url('/create') }}"></a>
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

    <div id="products">

        @if(count($products) > 0)
            <div class="products-area">
                <ul class="products-container">
                    @foreach($products as $product)
                        <a href="{{ url('/show/'.$product->product_id) }}">
                            <li class="products-content products-content-1">
                                <img src="{{ asset('img/product-1.png') }}" alt="">
                                <div class="product-text-item">
                                    <h4 class="category">{{$product -> category}}</h4>
                                    <h2 class="product-title">{{$product -> product_name}}</h2>
                                    @if($product -> use_by_date !== null)
                                        <div class="product-time">
                                            <p class="product-time-title">賞味期限</p>
                                            <span class="product-time-date">{{$product -> use_by_date}}</span>
                                        </div>
                                    @endif
                                    <div class="quantity">
                                        <p class="quantity-title">残り：{{$product -> stock}}</p>
                                        @if($product -> best_by_date !== null)
                                            <p class="quantity-number">{{$product -> best_by_date}}</p>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>



</section>

@endsection