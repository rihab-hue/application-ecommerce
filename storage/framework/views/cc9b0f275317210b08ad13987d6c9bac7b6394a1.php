<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('global.format.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.formats.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group <?php echo e($errors->has('nom') ? 'has-error' : ''); ?>">
                <label for="nom"><?php echo e(trans('global.format.fields.nom')); ?><span class="text-danger">*</label>
                <input type="text" id="nom" name="nom" class="form-control" value="<?php echo e(old('nom', isset($format) ? $format->nom : '')); ?>">
                <?php if($errors->has('nom')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('nom')); ?>

                    </p>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('global.format.fields.nom_helper')); ?>

                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/admin/formats/create.blade.php ENDPATH**/ ?>