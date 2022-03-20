
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title', 'All Categories'); ?>
<main class="col-md-9">


    <form action="<?php echo e(route('admin.categories.index')); ?>" method="get" class="d-flex mb-4">
        <input name="name" type="text" class="form-control me-2" placeholder="Search By Name">
        <select name="parent_id" class="form-control me-2">
            <option value="">All Categories</option>
            <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($parent->id); ?>"><?php echo e($parent->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <button type="submit" class="btn btn-secondary">Filter</button>
    </form>


    <a href="<?php echo e(route('admin.categories.create')); ?>" class="btn btn-primary">Create Category</a>
    <table class="table mt-4 mb-4">
        <tbody>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Parent ID</th>
                    <th>Status</th>
                    <th>Created_At</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($category->id); ?></td>
                <td><a href="<?php echo e(route('admin.categories.edit', $category->id)); ?>"><?php echo e($category->name); ?></a></td>
                <td><?php echo e($category->parent_id); ?></td>
                <td><?php echo e($category->status); ?></td>
                <td><?php echo e($category->created_at); ?></td>
                <td>
                    <form action="<?php echo e(route('admin.categories.destroy', $category->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </tbody>
    </table>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moham\Downloads\Laravel\training\Pallancer-Store\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>