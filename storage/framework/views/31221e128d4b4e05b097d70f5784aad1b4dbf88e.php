 
    <?php $__env->startSection('title', 'Inscription'); ?>
    <?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/inscription.css')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/img2/inscription.png')); ?>">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
    <div class="container  h-100 mt-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="<?php echo e(asset('assets/img/img2/avatar.jpg')); ?>" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                <form method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <label for="name" :value="__('Name')" class="mb-0" >

                            <input id="name" class="form-control input_user <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"type="text" placeholder="nom" name="name" value="<?php echo e(old('name')); ?>" required autofocus />
                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <label for="name" :value="__('email')" class="mb-0" >
                            <input id="email" type="email" class="form-control input_user<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email"  placeholder="email" value="<?php echo e(old('email')); ?>" required>
                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <label for="name" :value="__('password')" class="mb-0" >
                             <input id="password" type="password" class="form-control input_pass<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password"  placeholder="mot de passe" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                            </div> 
                            <label for="name" :value="__('confirm password')" class="mb-0" >
                            <input id="password-confirm" type="password" class="form-control input_pass" name="password_confirmation"  placeholder="confirmer mot de passe" required>
                        </div>                        
                        <button class="btn login_btn" type="submit">
                             <?php echo e(__('Créer un compte')); ?>

                        </button>
                        <div class="mt-2">
                            <div class="d-flex justify-content-center links">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="<?php echo e(route('login')); ?>">
                                <?php echo e(__('Jai un compte?')); ?>

                                </a>
                            </div>
                        </div>
                    </form>
                </div>             
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.inscrit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/auth/register.blade.php ENDPATH**/ ?>