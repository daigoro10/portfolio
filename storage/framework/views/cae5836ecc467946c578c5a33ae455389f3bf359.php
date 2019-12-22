<?php $__env->startSection('content'); ?>

<div class="main-contents">
<h3>購入ありがとうございました</h3>
<?php $__currentLoopData = $cartitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="photo">
    <p><img src="<?php echo e(asset($cartitem->product->img_url)); ?>" class="photo-img"></p>
    <p><?php echo e($cartitem->product->name); ?></p>
    <p><?php echo e($cartitem->product->price); ?></p>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\大輝\Desktop\suit_ec\resources\views/product/purchase.blade.php ENDPATH**/ ?>