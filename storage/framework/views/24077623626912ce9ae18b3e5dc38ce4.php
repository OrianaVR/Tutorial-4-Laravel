 
<?php $__env->startSection('title', $viewData["title"]); ?> 
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?> 
<?php $__env->startSection('content'); ?> 

<div class="card mb-3"> 
  <div class="row g-0"> 
    
    <div class="col-md-4"> 
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start"> 
    </div> 

    <div class="col-md-8"> 
      <div class="card-body"> 

        <h5 class="card-title"> 

          <?php if($viewData["product"]->getPrice() > 80): ?>
            <p style=" color: #ff0000">
                <?php echo e($viewData["product"]->getName()); ?>

            </p>
          <?php else: ?>
            <p>
                <?php echo e($viewData["product"]->getName()); ?>

            </p>
          <?php endif; ?>

        </h5> 

        <p class="card-text"><?php echo e($viewData["product"]->getPrice()); ?></p>
          
        <?php $__currentLoopData = $viewData["product"]->getComments(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
          - <?php echo e($comment->getDescription()); ?><br /> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      
      </div> 
    </div> 
  
  </div> 
</div> 

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\MAMP\htdocs\laravel-tutorial-03\resources\views/product/show.blade.php ENDPATH**/ ?>