 

<?php $__env->startSection("title", $viewData["title"]); ?> 

<?php $__env->startSection("subtitle", $viewData["subtitle"]); ?> 

<?php $__env->startSection('content'); ?> 

<div class="container"> 
  <div class="row justify-content-center"> 
    <div class="col-md-12"> 
        
        <h1>Available products</h1> 

        <ul> 
            <?php $__currentLoopData = $viewData["products"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <li> 
                    Id: <?php echo e($key); ?> -  
                    Name: <?php echo e($product["name"]); ?> - 
                    Price: <?php echo e($product["price"]); ?> - 
                    <a href="<?php echo e(route('cart.add', ['id'=> $key])); ?>">Add to cart</a> 
                </li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </ul> 

    </div> 
  </div> 

  <div class="row justify-content-center"> 
    <div class="col-md-12"> 

        <h1>Products in cart</h1> 

        <ul> 
            <?php $__currentLoopData = $viewData["cartProducts"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <li> 
                Id: <?php echo e($key); ?> -  
                Name: <?php echo e($product["name"]); ?> - 
                Price: <?php echo e($product["price"]); ?> 
            </li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </ul> 

      <a href="<?php echo e(route('cart.removeAll')); ?>">Remove all products from cart</a> 

    </div> 
  </div> 
</div> 

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\MAMP\htdocs\laravel-tutorial-03\resources\views/cart/index.blade.php ENDPATH**/ ?>