@extends('layout2')

@section('content')

<div class="main-contents">
<h3>購入ありがとうございました</h3>
@foreach ($cartitems as $cartitem)
<div class="photo">
    <p><img src="{{asset($cartitem->product->img_url)}}" class="photo-img"></p>
    <p>{{$cartitem->product->name}}</p>
    <p>{{$cartitem->product->price}}</p>
</div>
@endforeach

</div>
@endsection