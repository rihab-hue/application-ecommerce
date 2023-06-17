<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('global.role.title')); ?>

    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        <?php echo e(trans('global.role.fields.title')); ?>

                    </th>
                    <td>
                        <?php echo e($role->title); ?>

            
                    </td>
                </tr>
                <tr>
                    <th>
                        Permissions
                    </th>

                    <td>
                        <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="label label-info label-many"><?php echo e($permissions->title); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/admin/roles/show.blade.php ENDPATH**/ ?>