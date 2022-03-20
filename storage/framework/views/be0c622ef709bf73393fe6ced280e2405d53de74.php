
<?php $__env->startSection('title', 'Edit Category'); ?>
<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('admin.categories.update', $category->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <?php echo $__env->make('admin.categories._form', [
        'button_lable' => 'Update'
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moham\Downloads\Laravel\training\Pallancer-Store\resources\views/admin/categories/edit.blade.php ENDPATH**/ ?>