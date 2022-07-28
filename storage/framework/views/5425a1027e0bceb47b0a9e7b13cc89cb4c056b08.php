<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.car.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.cars.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="manufacturer_id"><?php echo e(trans('cruds.car.fields.manufacturer_id')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('manufacturer_id') ? 'is-invalid' : ''); ?>" type="text" name="manufacturer_id" id="manufacturer_id" value="<?php echo e(old('manufacturer_id', '')); ?>" required>
                    <?php $__currentLoopData = $manufacturer_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('manufacturer_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('manufacturer_id')): ?>
                    <span class="text-danger"><?php echo e($errors->first('manufacturer_id')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.car.fields.manufacturer_id_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="year_id"><?php echo e(trans('cruds.car.fields.year_id')); ?></label>
                <select class="form-control <?php echo e($errors->has('year_id') ? 'is-invalid' : ''); ?>" type="text" name="year_id" id="year_id" value="<?php echo e(old('year_id', '')); ?>" required>
                 <?php $__currentLoopData = $year_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('year_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('year_id')): ?>
                    <span class="text-danger"><?php echo e($errors->first('year_id')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.car.fields.year_id_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="model_id"><?php echo e(trans('cruds.car.fields.model_id')); ?></label>
                <select class="form-control <?php echo e($errors->has('model_id') ? 'is-invalid' : ''); ?>" type="text" name="model_id" id="model_id" value="<?php echo e(old('model_id', '')); ?>" required>
                <?php $__currentLoopData = $model_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('model_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('model_id')): ?>
                    <span class="text-danger"><?php echo e($errors->first('model_id')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.car.fields.model_id_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="color_id"><?php echo e(trans('cruds.car.fields.color_id')); ?></label>
                <select class="form-control <?php echo e($errors->has('color_id') ? 'is-invalid' : ''); ?>" type="text" name="color_id" id="color_id" value="<?php echo e(old('color_id', '')); ?>" required>
                <?php $__currentLoopData = $color_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('color_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('color_id')): ?>
                    <span class="text-danger"><?php echo e($errors->first('color_id')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.car.fields.color_id_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\car\resources\views/admin/cars/create.blade.php ENDPATH**/ ?>