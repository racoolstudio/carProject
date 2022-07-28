<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.car.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.customers.update", [$customer->id])); ?>" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="first_name"><?php echo e(trans('cruds.customer.fields.first_name')); ?></label>
                <input class="form-control <?php echo e($errors->has('first_name') ? 'is-invalid' : ''); ?>" type="text" name="first_name" id="first_name" value="<?php echo e(old('first_name', $customer->first_name)); ?>" required>
                <?php if($errors->has('first_name')): ?>
                    <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.customer.fields.first_name_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="last_name"><?php echo e(trans('cruds.customer.fields.last_name')); ?></label>
                <input class="form-control <?php echo e($errors->has('last_name') ? 'is-invalid' : ''); ?>" type="text" name="last_name" id="last_name" value="<?php echo e(old('last_name', $customer->last_name)); ?>" required>
                <?php if($errors->has('last_name')): ?>
                    <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.customer.fields.last_name_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="" for="other_name"><?php echo e(trans('cruds.customer.fields.other_name')); ?></label>
                <input class="form-control <?php echo e($errors->has('other_name') ? 'is-invalid' : ''); ?>" type="text" name="other_name" id="other_name" value="<?php echo e(old('other_name', $customer->other_name)); ?>" >
                <?php if($errors->has('other_name')): ?>
                    <span class="text-danger"><?php echo e($errors->first('other_name')); ?></span>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.customer.fields.other_name_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\car\resources\views/admin/customers/edit.blade.php ENDPATH**/ ?>