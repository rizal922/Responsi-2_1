<?php $__env->startSection('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title here'); ?>
<?php $__env->startSection('content'); ?>

<div class="login-box bg-white box-shadow border-radius-10">
  <div class="login-title">
    <h2 class="text-center text-primary">Create Seller Account</h2>
  </div>
  <form action="<?php echo e(route('seller.create')); ?>" method="POST">
    <?php echo csrf_field(); ?>
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

    <div class="form-group">
      <label for="">Full name: </label>
      <input type="text" class="form-control" placeholder="Enter full name" name="name" value="<?php echo e(old('name')); ?>">
      <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-danger ml-2"><?php echo e($message); ?></span>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
      <label for="">Email: </label>
      <input type="text" class="form-control" placeholder="Enter email address" name="email" value="<?php echo e(old('email')); ?>">
      <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-danger ml-2"><?php echo e($message); ?></span>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
      <label for="">Password: </label>
      <input type="password" name="password" class="form-control" placeholder="Enter password">
      <?php $__errorArgs = ['password'];
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

    <div class="form-group">
      <label for="">Confirm Password: </label>
      <input type="password" name="confirm_password" class="form-control" placeholder="Retype password">
      <?php $__errorArgs = ['confirm_password'];
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

    <div class="row">
      <div class="col-md-12">
        <div class="input-group mb-0">
          <button type="submit" class="btn btn-primary btn-lg btn-block">Create Account</button>
        </div>
        <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373" style="color:rgb(112,115,115);">OR</div>
        <div class="input-group mb-0">
          <a href="<?php echo e(route('seller.login')); ?>" class="btn btn-outline-primary btn-lg btn-block">Sign In</a>
        </div>
      </div>
    </div>


  </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layout.auth-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GearGamers_Ecommerce\resources\views/back/pages/seller/auth/register.blade.php ENDPATH**/ ?>