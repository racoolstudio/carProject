<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.car.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.cars.update", [$car->id])); ?>" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="manufacturer"><?php echo e(trans('cruds.car.fields.manufacturer')); ?></label>
                <input class="form-control <?php echo e($errors->has('manufacturer') ? 'is-invalid' : ''); ?>" type="text" name="manufacturer" id="manufacturer" value="<?php echo e(old('manufacturer', $car->manufacturer)); ?>" required>
                <?php if($errors->has('manufacturer')): ?>
                    <span class="text-danger"><?php echo e($errors->first('manufacturer')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.car.fields.manufacturer_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="year"><?php echo e(trans('cruds.car.fields.year')); ?></label>
                <input class="form-control <?php echo e($errors->has('year') ? 'is-invalid' : ''); ?>" type="text" name="year" id="year" value="<?php echo e(old('year', $car->year)); ?>" required>
                <?php if($errors->has('year')): ?>
                    <span class="text-danger"><?php echo e($errors->first('year')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.car.fields.year_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="model"><?php echo e(trans('cruds.car.fields.model')); ?></label>
                <input class="form-control <?php echo e($errors->has('model') ? 'is-invalid' : ''); ?>" type="text" name="model" id="model" value="<?php echo e(old('model', $car->model)); ?>" required>
                <?php if($errors->has('model')): ?>
                    <span class="text-danger"><?php echo e($errors->first('model')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.car.fields.model_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="color"><?php echo e(trans('cruds.car.fields.color')); ?></label>
                <input class="form-control <?php echo e($errors->has('model') ? 'is-invalid' : ''); ?>" type="text" name="color" id="color" value="<?php echo e(old('color', $car->model)); ?>" required>
                <?php if($errors->has('color')): ?>
                    <span class="text-danger"><?php echo e($errors->first('color')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.car.fields.color_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\car\resources\views/admin/cars/edit.blade.php ENDPATH**/ ?>