<?php $__env->startSection('content'); ?>
<div class="login-box">
    <div class="login-logo">
        <div class="login-logo">
            <a href="#">
                <?php echo e(trans('global.site_title')); ?>

            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg"><?php echo e(trans('global.reset_password')); ?></p>

            <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('password.email')); ?>">
                <?php echo e(csrf_field()); ?>

                <div>
                    <div class="form-group has-feedback">
                        <input type="email" name="email" class="form-control" required="required"="autofocus" placeholder="<?php echo e(trans('global.login_email')); ?>">
                        <?php if($errors->has('email')): ?>
                            <p class="help-block">
                                <?php echo e($errors->first('email')); ?>

                            </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-danger btn-block btn-flat">
                            <?php echo e(trans('global.reset_password')); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>





    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>