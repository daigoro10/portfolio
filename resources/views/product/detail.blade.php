@extends('layout2')

@section('content')

<div class="main-contents">
    <div class="flex-detail">
        <div class="product-and-heart">
            <p><img src="{{asset($item->img_url)}}" class="photo-img"></p>
            <div class="heart-detail">
                <a href="{{ route('product.favorite_up', ['id' => $item->id]) }}"><i class="fas fa-heart fa-lg"></i>
                </a>{{$item->favorite}}
            </div>
        </div>

        <div class="product-detail">
                <p>商品名：{{$item->name}}</p>    
                <p>値段：{{$item->price}}円</p>
                <br>
            <p><a id="button-add" href="{{ route('product.add', ['id' => $item->id]) }}">カートに追加する</a></p>
            <br>
            <p><a class="button" href="{{ route('product.cartshow') }}">カートを確認する</a></p>
        </div>
    </div>
</div>
@endsection