@extends('layout2')

@section('content')

<div class="main-contents">

<h3>購入履歴</h3>
    <div class="customer-history">
        <table>
            <tr>
                <th>商品</th>
                <th>商品名</th>
                <th>価格</th>
                <th>サイズ</th>
                <th>注文日</th>
            </tr>
            @foreach ($user->purchases as $purchase)
            <tr>
                <td><img src="{{$purchase->product->img_url}}" class="history-img"></td>
                <td>{{$purchase->product->name}}</td>
                <td>{{$purchase->product->price}}</td>
                <td>{{$purchase->product->size}}</td>
                <td>{{$purchase->product->created_at}}</td>
            </tr>
            @endforeach
        </table>
    </div>

<hr>
<br>

<h3>{{$user->name}} 様におすすめの商品</h3>

@foreach ($user->favorites as $favorite)
<div class="photo"> 
        <p><a href="{{route('product.detail', ['id' => $favorite->product->id])}}">
            <img src="{{$favorite->product->img_url}}" class="photo-img"></a>
        </p>
        <div class="text-center">
        <strong>{{$favorite->product->name}}</strong>
        ￥{{$favorite->product->price}}
        </div>
</div>
@endforeach

<div class="text-center">
    <a href="{{ route('changepassshow') }}">パスワードの変更はこちらから</a>
</div>


</div>
@endsection