@extends('layouts.all')

@section('content')

<section id="product-page">
    <h2 class="product-main-title">日用品詳細</h2>
    <div class="product_show">
        <div class="img-area">
            <img src="{{ asset('img/product-1.png') }}" alt="">
        </div>
        @if($product !== null)
        <div class="product-text">
            <dl>
                <dt>タグ</dt>
                <dd>{{$product -> tag}}</dd>
            </dl>
            <dl>
                <dt>カテゴリー</dt>
                <dd>{{$product -> category}}</dd>
            </dl>
            <dl>
                <dt>商品名</dt>
                <dd>{{$product -> product_name}}</dd>
            </dl>
            <dl>
                <dt>個数</dt>
                <dd>{{$product -> stock}}</dd>
            </dl>
            <dl>
                <dt>消費期限</dt>
                <dd>{{$product -> best_by_date}}</dd>
            </dl>
            <dl>
                <dt>賞味期限</dt>
                <dd>{{$product -> use_by_date}}</dd>
            </dl>
        </div>
        @else
        <div class="not">
            商品が見つかりませんでした。
        </div>
        @endif
    </div>

    <div class="btn-area">
        <button class="delete-btn"><a href="{{ url('/delete/'.$product -> product_id) }}" class="delete"></a>削除<span class="bg"></span></button>
        <button class="update-btn"><a href="{{ url('/edit/'.$product -> product_id) }}" class="update"></a>編集<span class="bg"></span></button>
    </div>
</section>

@endsection