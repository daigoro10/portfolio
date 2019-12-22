@extends('layout2')

@section('content')

<div class="main-contents">

    <div class="container">
        <form>
            <input type="text" name="keyword" value="{{$keyword}}"
            placeholder="商品名か色を入力">
            <input type="submit" value="検索">
        </form>
    </div>

    <div class="flex">
            @if(count($products) > 0)
                @foreach($products as $product)
                <div class="item">
                    <a href="{{route('product.detail', ['id' => $product->id])}}">
                        <img src="{{$product->img_url}}" class="photo-search">
                    </a>
                    <div class="text-center">
                        {{$product->name}}
                    </div>
                </div>
                @endforeach
            @endif
    </div>

</div>
@endsection