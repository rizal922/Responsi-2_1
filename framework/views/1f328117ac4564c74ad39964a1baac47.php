<div>
    
    <div class="product-wrap">
        <div class="product-list">

            <ul class="row">
                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    
                
                <li class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-box">
                        <div class="producct-img">
                            <img src="/images/products/<?php echo e($item->product_image); ?>" alt="">
                        </div>
                        <div class="product-caption">
                            <h4><a href="#"><?php echo e($item->name); ?></a></h4>
                            <div class="price">
                                <!--[if BLOCK]><![endif]--><?php if( $item->compare_price ): ?>
                                    <del>$<?php echo e($item->compare_price); ?></del>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                
                                <ins>$<?php echo e($item->price); ?></ins>
                            </div>
                            <div class="btn-group">
                                <a href="<?php echo e(route('seller.product.edit-product',['id'=>$item->id])); ?>" class="btn btn-outline-primary btn-sm">Edit</a>
                                <a href="javascript:;" data-id="<?php echo e($item->id); ?>" id="deleteProductBtn" class="btn btn-outline-danger btn-sm">Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <li class="col-12">
                       <span class="text-danger">No product(s) found!</span>
                    </li>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </ul>

        </div>
        <div class="blog-pagination mb-30">
            <div class="btn-toolbar justify-content-center mb-15">
                <div class="btn-group">
                   <?php echo e($products->links('livewire::simple-bootstrap')); ?>

                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\xampp\htdocs\GearGamers_Ecommerce\resources\views/livewire/seller/products.blade.php ENDPATH**/ ?>