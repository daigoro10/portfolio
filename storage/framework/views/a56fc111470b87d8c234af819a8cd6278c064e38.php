<?php $__env->startSection('content'); ?>

<div class="main-contents">
<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="photo"> 
        <p><a href="<?php echo e(route('product.detail', ['id' => $item->id])); ?>">
            <img src="<?php echo e($item->img_url); ?>" class="photo-img"></a>
        </p>
        <div class="text-center">
        <strong><?php echo e($item->name); ?></strong>
        ￥<?php echo e($item->price); ?>

        </div>

        <div class="flex">
        
            <div class="category">
            <a href="#"><?php echo e($item->category); ?></a>
            </div>

            <div class="heart">
            <i class="fas fa-heart fa-lg"><?php echo e($item->favorite); ?></i>
            </div>

        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="pagination">
    <?php echo e($items->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\大輝\Desktop\suit_ec\resources\views/product/index.blade.php ENDPATH**/ ?>