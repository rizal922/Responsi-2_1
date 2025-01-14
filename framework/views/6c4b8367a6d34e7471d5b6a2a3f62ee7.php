<?php $__env->startSection('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title here'); ?>
<?php $__env->startSection('content'); ?>

<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>Profile</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('seller.home')); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Profile
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('seller.seller-profile');

$__html = app('livewire')->mount($__name, $__params, 'lw-3123807481-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $('input[type="file"][id="sellerProfilePictureFile"]').Kropify({
            preview:'#sellerProfilePicture',
            viewMode:1,
            aspectRatio:1,
            cancelButtonText:'Cancel',
            resetButtonText:'Reset',
            cropButtonText:'Crop & update',
            processURL:'<?php echo e(route("seller.change-profile-picture")); ?>',
            maxSize:2097152,
            showLoader:true,
            success:function(data){
                if( data.status == 1 ){
                    toastr.success(data.msg);
                    Livewire.dispatch('updateAdminSellerHeaderInfo');
                    Livewire.dispatch('updateSellerProfilePage');
                }else{
                    toastr.error(data.msg);
                }
            },
            errors:function(error, text){
                console.log(text);
            },
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('back.layout.pages-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GearGamers_Ecommerce\resources\views/back/pages/seller/profile.blade.php ENDPATH**/ ?>