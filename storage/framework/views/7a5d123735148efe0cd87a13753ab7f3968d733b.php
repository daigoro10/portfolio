<?php $__env->startSection('content'); ?>

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
            <?php $__currentLoopData = $user->purchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><img src="<?php echo e($purchase->product->img_url); ?>" class="history-img"></td>
                <td><?php echo e($purchase->product->name); ?></td>
                <td><?php echo e($purchase->product->price); ?></td>
                <td><?php echo e($purchase->product->size); ?></td>
                <td><?php echo e($purchase->product->created_at); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

<hr>
<br>

<h3><?php echo e($user->name); ?> 様におすすめの商品</h3>

<?php $__currentLoopData = $user->favorites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favorite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="photo"> 
        <p><a href="<?php echo e(route('product.detail', ['id' => $favorite->product->id])); ?>">
            <img src="<?php echo e($favorite->product->img_url); ?>" class="photo-img"></a>
        </p>
        <div class="text-center">
        <strong><?php echo e($favorite->product->name); ?></strong>
        ￥<?php echo e($favorite->product->price); ?>

        </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="text-center">
    <a href="<?php echo e(route('changepassshow')); ?>">パスワードの変更はこちらから</a>
</div>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\大輝\Desktop\suit_ec\resources\views/product/mypage.blade.php ENDPATH**/ ?>