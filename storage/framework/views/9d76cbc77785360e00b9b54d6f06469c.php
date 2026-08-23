 
<?php $__env->startSection('title', $viewData["title"]); ?> 
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?> 
<?php $__env->startSection('content'); ?> 

<div class="row"> 

  <?php $__currentLoopData = $viewData["products"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

    <div class="col-md-4 col-lg-3 mb-2"> 
      <div class="card"> 
        
        <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card"> 
        
         <div class="card-body text-center"> 
          <a href="<?php echo e(route('product.show', ['id'=> $product->getId()])); ?>" 
          class="btn bg-primary text-white"><?php echo e($product->getName()); ?></a> 

      </div> 

      </div> 
    </div> 

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

</div> 

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\MAMP\htdocs\laravel-tutorial-03\resources\views/product/index.blade.php ENDPATH**/ ?>