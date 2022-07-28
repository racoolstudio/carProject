<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.model.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.models.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label class="required" for="model"><?php echo e(trans('cruds.model.fields.model')); ?></label>
                <input class="form-control <?php echo e($errors->has('model') ? 'is-invalid' : ''); ?>" type="text" name="model" id="model" value="<?php echo e(old('model', '')); ?>" required>
                <?php if($errors->has('model')): ?>
                    <span class="text-danger"><?php echo e($errors->first('model')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.model.fields.model_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\car\resources\views/admin/models/create.blade.php ENDPATH**/ ?>