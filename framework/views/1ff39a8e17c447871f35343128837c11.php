<div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="h4 text-blue">Categories</h4>
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo e(route('admin.manage-categories.add-category')); ?>" class="btn btn-primary btn-sm" type="button">
                            <i class="fa fa-plus"></i>
                            Add Category
                        </a>
                    </div>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table table-borderless table-striped">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th>Category image</th>
                                <th>Category name</th>
                                <th>N. of sub categories</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0" id="sortable_categories">
                            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr data-index="<?php echo e($item->id); ?>" data-ordering="<?php echo e($item->ordering); ?>">
                                <td>
                                    <div class="avatar mr-2">
                                        <img src="/images/categories/<?php echo e($item->category_image); ?>" width="50" height="50" alt="">
                                    </div>
                                </td>
                                <td>
                                    <?php echo e($item->category_name); ?>

                                </td>
                                <td>
                                    <?php echo e($item->subcategories->count()); ?>

                                </td>
                                <td>
                                    <div class="table-actions">
                                        <a href="<?php echo e(route('admin.manage-categories.edit-category',['id'=>$item->id])); ?>" class="text-primary">
                                            <i class="dw dw-edit2"></i>
                                        </a>
                                        <a href="javascript:;" class="text-danger deleteCategoryBtn" data-id="<?php echo e($item->id); ?>">
                                            <i class="dw dw-delete-3"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4">
                                        <span class="text-danger">No category found!</span>
                                    </td>
                                </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            
                        </tbody>
                    </table>
                </div>
                <div class="d-block mt-2">
                    <?php echo e($categories->links('livewire::simple-bootstrap')); ?>

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="h4 text-blue">Sub Categories</h4>
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo e(route('admin.manage-categories.add-subcategory')); ?>" class="btn btn-primary btn-sm" type="button">
                            <i class="fa fa-plus"></i>
                            Add Sub Category
                        </a>
                    </div>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table table-borderless table-striped">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th>Sub Category name</th>
                                <th>Category name</th>
                                <th>Child Sub Categories</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0" id="sortable_subcategories">

                            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                
                           
                            <tr data-index="<?php echo e($item->id); ?>" data-ordering="<?php echo e($item->ordering); ?>">
                               
                                <td>
                                   <?php echo e($item->subcategory_name); ?>

                                </td>
                                <td>
                                    <?php echo e($item->parentcategory->category_name); ?>

                                </td>
                                <td>
                                    <!--[if BLOCK]><![endif]--><?php if( $item->children->count() > 0 ): ?>
                                        <ul class="list-group" id="sortable_child_subcategories">
                                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $item->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li data-index="<?php echo e($child->id); ?>" data-ordering="<?php echo e($child->ordering); ?>" class="d-flex justify-content-between align-items-center">
                                                    - <?php echo e($child->subcategory_name); ?>

                                                    <div>
                                                        <a href="<?php echo e(route('admin.manage-categories.edit-subcategory',['id'=>$child->id])); ?>" class="text-primary" data-toggle="tooltip" title="Edit child sub category">Edit</a>
                                                        |
                                                        <a href="javascript:;" class="text-danger deleteChildSubCategoryBtn" data-toggle="tooltip" title="Delete child sub category" data-id="<?php echo e($child->id); ?>" data-title="Child Sub Category">Delete</a>
                                                    </div>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                        </ul>
                                    <?php else: ?>
                                        None
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </td>
                                <td>
                                    <div class="table-actions">
                                        <a href="<?php echo e(route('admin.manage-categories.edit-subcategory',['id'=>$item->id])); ?>" class="text-primary">
                                            <i class="dw dw-edit2"></i>
                                        </a>
                                        <a href="javascript:;" class="text-danger deleteSubCategoryBtn" data-id="<?php echo e($item->id); ?>" data-title="Sub Category">
                                            <i class="dw dw-delete-3"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4">
                                        <span class="text-danger">No sub category found!</span>
                                    </td>
                                </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                </div>
                <div class="d-block mt-2">
                    <?php echo e($subcategories->links('livewire::simple-bootstrap')); ?>

                </div>
            </div>
        </div>
      </div>

</div>
<?php /**PATH C:\xampp\htdocs\GearGamers_Ecommerce\resources\views/livewire/admin-categories-subcategories-list.blade.php ENDPATH**/ ?>