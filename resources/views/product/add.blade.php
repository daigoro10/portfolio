@extends('layout2')

@section('content')

<div class="main-contents">
カートに商品を追加しました。
<table>
    <tr>
        <th></th>
        <th>商品名</th>
        <th>価格</th>
        <th></th>
    </tr>
    @foreach ($cart->cartitems as $cartitem)
    <tr>
        <td class="icon"><img src="{{asset($cartitem->product->img_url)}}" class="photo-cart"></td>
        <td>{{$cartitem->product->name}}</td>
        <td>{{$cartitem->product->price}}</td>
        <td><a href="{{ route('product.delete', ['cartitem_id' => $cartitem->id]) }}">削除する</a></td>
    </tr>
    @endforeach
</table>
<hr>
<h3>合計は{{$total}}円です</h3>
<hr>
<p><a href="{{ route('product.purchase', ['cart_id' => $cart->id]) }}">注文を確定する</a></p>
<hr>
<p><a href="{{ route('product.index') }}">買い物を続ける</a></p>

</div>

@endsection