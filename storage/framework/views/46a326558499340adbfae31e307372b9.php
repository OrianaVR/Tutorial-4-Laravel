
<?php $__env->startSection("title", $viewData["title"]); ?>
<?php $__env->startSection("subtitle", $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>

    <?php if(isset($message)): ?>
        <p text-center style="color:darkgreen"><?php echo e($message); ?></p>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\MAMP\htdocs\laravel-tutorial-03\resources\views/product/save.blade.php ENDPATH**/ ?>