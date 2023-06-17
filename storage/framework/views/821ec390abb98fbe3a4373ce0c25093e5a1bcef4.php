<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('global.user.title')); ?>

    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        <?php echo e(trans('global.user.fields.name')); ?>

                    </th>
                    <td>
                        <?php echo e($user->name); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.user.fields.email')); ?>

                    </th>
                    <td>
                        <?php echo e($user->email); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.user.fields.email_verified_at')); ?>

                    </th>
                    <td>
                        <?php echo e($user->email_verified_at); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.user.fields.telephone')); ?>

                    </th>
                    <td>
                        <?php echo e($user->telephone); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        Roles
                    </th>
                    <td>
                        <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $roles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="label label-info label-many"><?php echo e($roles->title); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/admin/users/show.blade.php ENDPATH**/ ?>