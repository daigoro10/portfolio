<?php $__env->startSection('content'); ?>

<div class="main-contents">
    <div class="flex-detail">
        <div class="product-and-heart">
            <p><img src="<?php echo e(asset($item->img_url)); ?>" class="photo-img"></p>
            <div class="heart-detail">
                <a href="<?php echo e(route('product.favorite_up', ['id' => $item->id])); ?>"><i class="fas fa-heart fa-lg"></i>
                </a><?php echo e($item->favorite); ?>

            </div>
        </div>

        <div class="product-detail">
                <p>商品名：<?php echo e($item->name); ?></p>    
                <p>値段：<?php echo e($item->price); ?>円</p>
                <br>
            <p><a id="button-add" href="<?php echo e(route('product.add', ['id' => $item->id])); ?>">カートに追加する</a></p>
            <br>
            <p><a class="button" href="<?php echo e(route('product.cartshow')); ?>">カートを確認する</a></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\大輝\Desktop\suit_ec\resources\views/product/detail.blade.php ENDPATH**/ ?>