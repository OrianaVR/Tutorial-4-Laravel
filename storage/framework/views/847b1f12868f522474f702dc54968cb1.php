 
<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?> 
<?php $__env->startSection('content'); ?> 

<div class="text-center"> 
  <div class="container"> 
    <div class="row"> 
      
      <div class="col-lg-4 ms-auto"> 
        <p class="lead">Name: <?php echo e($viewData['name']); ?></p> 
      </div> 

      <div class="col-lg-4 me-auto"> 
        <p class="lead">Email: <?php echo e($viewData['email']); ?></p> 
      </div> 

      <div class="col-lg-4 me-auto"> 
        <p class="lead">Address: <?php echo e($viewData['address']); ?></p> 
      </div> 

      <div class="col-lg-4 me-auto"> 
        <p class="lead">Phone: <?php echo e($viewData['phone']); ?></p> 
      </div> 

    </div> 
  </div> 
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\MAMP\htdocs\laravel-tutorial-03\resources\views/home/contact.blade.php ENDPATH**/ ?>