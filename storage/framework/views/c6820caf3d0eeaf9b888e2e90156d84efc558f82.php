<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>SUIT-EC</title>
  <?php echo $__env->yieldContent('styles'); ?>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</head>
<body>
    <div class="header">
    <h1><a href="<?php echo e(route('product.index')); ?>">SUIT_EC</a></h1>
    </div>

    <div class="nav-border">
    <nav>
      <ul>
        <li><a href="<?php echo e(route('product.index')); ?>">Home</a></li>
        <li><a href="">News</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Access</a></li>
        <li><a href="">Blog</a></li>
      </ul>
    </nav>
    </div>

    <br>
    <div class="main">
    
<?php echo $__env->yieldContent('content'); ?>

        <div class="right-navi">
        <?php if(Auth::check()): ?>
        <p><a href="<?php echo e(route('product.make_cart')); ?>" class="btn-square">カート作成</a></p>        
        <p><a href="<?php echo e(route('product.mypageshow')); ?>"><i class="far fa-address-card fa-lg">マイページ</i></a></p>        
        <a href="#" id="logout" class="my-navbar-item"><i class="fas fa-sign-in-alt fa-lg">ログアウト</i></a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
          <?php echo csrf_field(); ?>
        </form>
        <?php else: ?>
        <p><a href="/login"><i class="fas fa-sign-in-alt fa-lg">ログイン</i></a></p>
        <p><a href="/register"><i class="fas fa-folder-plus fa-lg">登録</i></a></p>
        <?php endif; ?>
        </div>
    </div>

    <div class="left-navi">
    <p><a href="<?php echo e(route('product.search')); ?> " class="btn-square">商品検索</a></p>
    <h3><p>人気ランキング</p></h3>
    <ol>
    </ol>
    </div>


    <div class="footer">
      <div class="text-center">
        <small>@suit_ec  contents</smaall>
      </div>
    </div>
    
<?php if(Auth::check()): ?>
  <script>
    document.getElementById('logout').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('logout-form').submit();
    });
  </script>
<?php endif; ?>
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
<?php echo $__env->yieldContent('scripts'); ?>

<script>
  var btn = document.getElementById('button-add');
  btn.addEventListener('click', function() {
    window.confirm('カートに商品が追加されました。');
  })
</script>


</body>
</html><?php /**PATH C:\Users\大輝\Desktop\suit_ec\resources\views/layout2.blade.php ENDPATH**/ ?>