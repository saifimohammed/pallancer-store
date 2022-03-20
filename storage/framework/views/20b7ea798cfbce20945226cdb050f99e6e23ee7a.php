
<?php $__env->startSection('title', 'Add Category'); ?>
<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('admin.categories.store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
<?php echo $__env->make('admin.categories._form', [
    'button_lable' => 'Add'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moham\Downloads\Laravel\training\Pallancer-Store\resources\views/admin/categories/create.blade.php ENDPATH**/ ?>