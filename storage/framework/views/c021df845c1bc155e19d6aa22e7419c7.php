 
<?php $__env->startSection('title', 'Home Page - Online Store'); ?> 
<?php $__env->startSection('content'); ?> 

<div class="text-center"> 
  <?php echo e($viewData['title']); ?>

</div> 

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\MAMP\htdocs\laravel-tutorial-03\resources\views/home/index.blade.php ENDPATH**/ ?>