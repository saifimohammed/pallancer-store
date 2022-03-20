<div class="form-group mb-4">
    <label for="">Name:</label>
    <input type="text" name="name" class="form-control" value="<?php echo e($category->name); ?>">
</div>
<div class="form-group mb-4">
    <label for="">Parent:</label>
    <select name="parent_id" class="form-control">
        <option value="">No Parent</option>
        <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($parent->id); ?>" <?php if($parent->id == $category->parent_id): ?> selected <?php endif; ?>><?php echo e($parent->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group mb-4">
    <label for="">Description:</label>
    <textarea name="description" id="" cols="5" rows="5" class="form-control"><?php echo e($category->description); ?></textarea>
</div>
<div class="form-group mb-4">
    <label for="">Image:</label>
    <input type="file" name="image" class="form-control">
</div>
<div class="form-group mb-4">
    <label for="">Status:</label>
    <div>
        <label for="">Active</label>
        <input type="radio" name="status" id="" value="active" <?php if($category->status == 'active'): ?> checked <?php endif; ?>>
        <label for="">Inactive</label>
        <input type="radio" name="status" value="inactive" <?php if($category->status == 'inactive'): ?> checked <?php endif; ?>>
    </div>
</div>
<div class="form-group mb-4">
    <button type="submit" class="btn btn-primary form-control mb-2"><?php echo e($button_lable); ?></button>
    <a href="<?php echo e(route('admin.categories.index')); ?>" class="btn btn-secondary form-control">Index</a>
</div><?php /**PATH C:\Users\moham\Downloads\Laravel\training\Pallancer-Store\resources\views/admin/categories/_form.blade.php ENDPATH**/ ?>