<?php $__env->startSection('content'); ?>

<div class="main-contents">

    <div class="container">
        <div class="pass-header">パスワード変更</div>
        <?php if(session('change_password_error')): ?>
            <?php echo e(session('change_password_error')); ?>

        <?php endif; ?>

        <?php if(session('change_password_success')): ?>
            <?php echo e(session('change_password_success')); ?>

        <?php endif; ?>

        <div class="pass-body">
            <form method="POST" action="<?php echo e(route('changepass')); ?>">
                <?php echo csrf_field(); ?>
                <p><label for="current">
                    現在のパスワード
                </label></p>
                <input type="password" name="current-password" required autofocus>
            
                <p><label for="password">
                    新しいパスワード
                </label></p>
                <input type="password" name="new-password" required>

                <?php if($errors->has('new-password')): ?>
                    <strong><?php echo e($errors->first('new-password')); ?></strong>
                <?php endif; ?>

                <p><label for="confirm">
                    新しいパスワード（確認用）
                </label></p>
                <input type="password" name="new-password_confirmation" required>
                <button type="submit">変更</button>
            </form>
        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\大輝\Desktop\suit_ec\resources\views/auth/changepassword.blade.php ENDPATH**/ ?>