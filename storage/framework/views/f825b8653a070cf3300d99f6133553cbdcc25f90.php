<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.manufacturer.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.manufacturers.update", [$manufacturer->id])); ?>" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="manufacturer"><?php echo e(trans('cruds.manufacturer.fields.manufacturer')); ?></label>
                <input class="form-control <?php echo e($errors->has('manufacturer') ? 'is-invalid' : ''); ?>" type="text" name="manufacturer" id="manufacturer" value="<?php echo e(old('manufacturer', $manufacturer->manufacturer)); ?>" required>
                <?php if($errors->has('manufacturer')): ?>
                    <span class="text-danger"><?php echo e($errors->first('manufacturer')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.manufacturer.fields.manufacturer_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\car\resources\views/admin/manufacturers/edit.blade.php ENDPATH**/ ?>