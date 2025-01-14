<?php $__env->startSection('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title here'); ?>
<?php $__env->startSection('content'); ?>

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Shop Settings</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('seller.home')); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Shop Settings
                    </li>
                </ol>
            </nav>
        </div>
      
    </div>
</div>

<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
    <?php if (isset($component)) { $__componentOriginalec1e920844a655da23f15e0530a06cad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec1e920844a655da23f15e0530a06cad = $attributes; } ?>
<?php $component = App\View\Components\Alert\FormAlert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert.form-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert\FormAlert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec1e920844a655da23f15e0530a06cad)): ?>
<?php $attributes = $__attributesOriginalec1e920844a655da23f15e0530a06cad; ?>
<?php unset($__attributesOriginalec1e920844a655da23f15e0530a06cad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec1e920844a655da23f15e0530a06cad)): ?>
<?php $component = $__componentOriginalec1e920844a655da23f15e0530a06cad; ?>
<?php unset($__componentOriginalec1e920844a655da23f15e0530a06cad); ?>
<?php endif; ?>
    <form action="<?php echo e(route('seller.shop-setup')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><b>Shop name:</b></label>
                <input type="text" class="form-control" name="shop_name" placeholder="Enter your shop name here..." value="<?php echo e(old('shop_name') ? old('shop_name') : $shopInfo->shop_name); ?>">
                <?php $__errorArgs = ['shop_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for=""><b>Shop phone:</b></label>
                <input type="text" class="form-control" name="shop_phone" placeholder="eg: +1 234 567 890" value="<?php echo e(old('shop_phone') ? old('shop_phone') : $shopInfo->shop_phone); ?>">
                <?php $__errorArgs = ['shop_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label for=""><b>Shop address:</b></label>
                <input type="text" class="form-control" name="shop_address" placeholder="eg: 8977 HUXS Street 56" value="<?php echo e(old('shop_address') ? old('shop_address') : $shopInfo->shop_address); ?>">
                <?php $__errorArgs = ['shop_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="form-group">
                <label for=""><b>Shop description:</b></label>
                <textarea class="form-control" name="shop_description" cols="30" rows="10" placeholder="Describe your shop..."><?php echo e(old('shop_description') ? old('shop_description') : $shopInfo->shop_description); ?></textarea>
                <?php $__errorArgs = ['shop_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label for=""><b>Shop logo:</b></label>
                <input type="file" name="shop_logo" class="form-control">
                <div class="mb-2 mt-1" style="max-width: 200px">
                    <img src="<?php echo e($shopInfo->shop_logo != null ? '/images/shop/'.$shopInfo->shop_logo : ''); ?>" alt="" class="img-thumbnail" id="shop_logo_preview">
                </div>
                <?php $__errorArgs = ['shop_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $('input[type="file"][name="shop_logo"]').ijaboViewer({
            preview:'img#shop_logo_preview',
            imageShape:'square',
            allowedExtensions:['png','jpg','svg'],
            onErrorShape:function(message,element){
                alert(message);
            },
            onInvalidType:function(message, element){
                alert(message);
            },
            onSuccess:function(message, element){}
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('back.layout.pages-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GearGamers_Ecommerce\resources\views/back/pages/seller/shop-settings.blade.php ENDPATH**/ ?>