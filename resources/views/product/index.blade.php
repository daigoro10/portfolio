@extends('layout')

@section('content')

<div class="main-contents">
@foreach ($items as $item)
    <div class="photo"> 
        <p><a href="{{route('product.detail', ['id' => $item->id])}}">
            <img src="{{$item->img_url}}" class="photo-img"></a>
        </p>
        <div class="text-center">
        <strong>{{$item->name}}</strong>
        ￥{{$item->price}}
        </div>

        <div class="flex">
        
            <div class="category">
            <a href="#">{{$item->category}}</a>
            </div>

            <div class="heart">
            <i class="fas fa-heart fa-lg">{{$item->favorite}}</i>
            </div>

        </div>
    </div>
@endforeach
    <div class="pagination">
    {{$items->links()}}
    </div>
</div>
@endsection

