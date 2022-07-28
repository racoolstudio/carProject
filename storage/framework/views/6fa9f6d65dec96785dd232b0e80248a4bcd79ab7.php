<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.year.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.years.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label class="required" for="year"><?php echo e(trans('cruds.year.fields.year')); ?></label>
                <input class="form-control <?php echo e($errors->has('year') ? 'is-invalid' : ''); ?>" type="text" name="year" id="year" value="<?php echo e(old('year', '')); ?>" required>
                <?php if($errors->has('year')): ?>
                    <span class="text-danger"><?php echo e($errors->first('year')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.year.fields.year_helper')); ?></span>
            </div>
           
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    <?php echo e(trans('global.save')); ?>

                </button>
            </div>
        </form>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\car\resources\views/admin/years/create.blade.php ENDPATH**/ ?>