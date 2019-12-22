<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>SUIT-EC</title>
  @yield('styles')
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</head>
<body>
    <div class="header">
    <h1><a href="{{route('product.index')}}">SUIT_EC</a></h1>
    </div>

    <div class="nav-border">
    <nav>
      <ul>
        <li><a href="{{ route('product.index') }}">Home</a></li>
        <li><a href="">News</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Access</a></li>
        <li><a href="">Blog</a></li>
      </ul>
    </nav>
    </div>

    <div class='container'>
      <div class='single-item'>
        <div>
          <img src="images/slide1.jpg" class="slide-photo">
        </div>
        <div>
          <img src="images/slide2.jpg" class="slide-photo">
        </div>
        <div>
          <img src="images/slide3.jpg" class="slide-photo">
        </div>
        <div>
          <img src="images/slide1.jpg" class="slide-photo">
        </div>
        <div>
          <img src="images/slide2.jpg" class="slide-photo">
        </div>
        <div>
          <img src="images/slide3.jpg" class="slide-photo">
        </div>
      </div>
    </div>

    <br>
    <div class="main">
    
@yield('content')

        <div class="right-navi">
        @if (Auth::check())
        <p>USER: {{$user->name}}</p>
        <p><a href="{{ route('product.make_cart') }}" class="btn-square">カート作成</a></p>        
        <p><a href="{{ route('product.mypageshow') }}"><i class="far fa-address-card fa-lg">マイページ</i></a></p>        
        <a href="#" id="logout" class="my-navbar-item"><i class="fas fa-sign-in-alt fa-lg">ログアウト</i></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        @else
        <p><a href="/login"><i class="fas fa-sign-in-alt fa-lg">ログイン</i></a></p>
        <p><a href="/register"><i class="fas fa-folder-plus fa-lg">登録</i></a></p>
        @endif
        </div>
    </div>

    <div class="left-navi">
    <p><a href="{{route('product.search')}} " class="btn-square">商品検索</a></p>
    <h3><p>人気ランキング</p></h3>
    <ol>
    @foreach ($items_rank as $item)
    <li><a href="{{route('product.detail', ['id' => $item->id])}}">{{$item->name}}</a></li>
    @endforeach
    </ol>
    </div>

    <div class="footer">
      <div class="text-center">
        <small>@suit_ec contents</smaall>
      </div>
    </div>

@if(Auth::check())
  <script>
    document.getElementById('logout').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('logout-form').submit();
    });
  </script>
@endif
<script>
    $(function(){
      $('.single-item').slick({
        accessibility: true,
        autoplay: true,
        autoplaySpeed: 1000,
        dots: true,
        fade: true,
      });
    });
</script>
@yield('scripts')

</body>
</html>