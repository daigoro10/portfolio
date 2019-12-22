<?php $__env->startSection('content'); ?>

<div class="main-contents">
<?php if(count($cart->cartitems) == 0): ?>
<h2>カートに商品がありません。</h2>

<?php else: ?>
<table>
    <tr>
        <th></th>
        <th>商品名</th>
        <th>価格</th>
        <th></th>
    </tr>
    <?php $__currentLoopData = $cart->cartitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="icon"><img src="<?php echo e(asset($cartitem->product->img_url)); ?>" class="photo-cart"></td>
        <td><?php echo e($cartitem->product->name); ?></td>
        <td><?php echo e($cartitem->product->price); ?></td>
        <td><a href="<?php echo e(route('product.delete', ['cartitem_id' => $cartitem->id])); ?>">削除する</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<hr>
<h3>合計は<?php echo e($total); ?>円です</h3>
<hr>
<p><a href="<?php echo e(route('product.purchase', ['cart_id' => $cart->id])); ?>">注文を確定する</a></p>
<hr>
<p><a href="<?php echo e(route('product.index')); ?>">買い物を続ける</a></p>

<?php endif; ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\大輝\Desktop\suit_ec\resources\views/product/cartshow.blade.php ENDPATH**/ ?>