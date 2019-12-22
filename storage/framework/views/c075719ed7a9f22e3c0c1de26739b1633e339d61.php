<?php $__env->startSection('content'); ?>

<div class="main-contents">

    <div class="container">
        <form>
            <input type="text" name="keyword" value="<?php echo e($keyword); ?>"
            placeholder="商品名か色を入力">
            <input type="submit" value="検索">
        </form>
    </div>

    <div class="flex">
            <?php if(count($products) > 0): ?>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <a href="<?php echo e(route('product.detail', ['id' => $product->id])); ?>">
                        <img src="<?php echo e($product->img_url); ?>" class="photo-search">
                    </a>
                    <div class="text-center">
                        <?php echo e($product->name); ?>

                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\大輝\Desktop\suit_ec\resources\views/product/search.blade.php ENDPATH**/ ?>