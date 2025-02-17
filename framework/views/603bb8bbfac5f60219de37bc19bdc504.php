<?php $__env->startSection('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title here'); ?>
<?php $__env->startSection('content'); ?>
<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin-categories-subcategories-list');

$__html = app('livewire')->mount($__name, $__params, 'lw-2763537317-0', $__slots ?? [], get_defined_vars());

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
        $('table tbody#sortable_categories').sortable({
            cursor:"move",
            update:function(event,ui){
                $(this).children().each(function(index){
                   if( $(this).attr("data-ordering") != (index+1) ){
                      $(this).attr("data-ordering",(index+1)).addClass("updated");
                   }
                });
                var positions = [];
                $(".updated").each(function(){
                   positions.push([$(this).attr("data-index"),$(this).attr("data-ordering")]);
                   $(this).removeClass("updated");
                });
                // alert(positions);
                Livewire.dispatch("updateCategoriesOrdering",[positions]);
            }        
        });

        $(document).on('click','.deleteCategoryBtn', function(e){
            e.preventDefault();
            var category_id = $(this).data('id');
            swal.fire({
                title:'Are you sure?',
                html:'You want to delete this category',
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    Livewire.dispatch('deleteCategory',[category_id]);
                }
            });
        });

        $('table tbody#sortable_subcategories').sortable({
            cursor:"move",
            update:function(event, ui){
                $(this).children().each(function(index){
                    if( $(this).attr("data-ordering") != (index+1) ){
                        $(this).attr("data-ordering",(index+1)).addClass("updated");
                    }
                });
                var positions = [];
                $(".updated").each(function(){
                    positions.push([$(this).attr("data-index"),$(this).attr("data-ordering")]);
                    $(this).removeClass("updated");
                });
                Livewire.dispatch("updateSubCategoriesOrdering",[positions]);
            }
        });

        $('ul#sortable_child_subcategories').sortable({
            cursor:"move",
            update:function(event, ui){
                $(this).children().each(function(index){
                    if( $(this).attr("data-ordering") != (index+1) ){
                        $(this).attr("data-ordering",(index+1)).addClass("updated");
                    }
                });
                var positions = [];
                $(".updated").each(function(){
                    positions.push([$(this).attr("data-index"),$(this).attr("data-ordering")]);
                    $(this).removeClass("updated");
                });
                Livewire.dispatch("updateChildSubCategoriesOrdering",[positions]);
            }
        });

        $(document).on('click','.deleteSubCategoryBtn,.deleteChildSubCategoryBtn', function(e){
             e.preventDefault();
             var subcategory_id = $(this).data("id");
             var title = $(this).data("title");
             swal.fire({
                title:'Are you sure?',
                html:'You want to delete this <b>'+title+'</b>',
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
             }).then(function(result){
                 if( result.value ){
                    Livewire.dispatch("deleteSubCategory",[subcategory_id]);
                 }
             });
        });

    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('back.layout.pages-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GearGamers_Ecommerce\resources\views/back/pages/admin/cats-subcats-list.blade.php ENDPATH**/ ?>