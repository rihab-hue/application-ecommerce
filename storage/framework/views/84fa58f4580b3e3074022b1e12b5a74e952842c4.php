    <?php $__env->startSection('title', 'Connexion'); ?>
    <!-- CSS here -->
    <?php $__env->startSection('css'); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('/assets/img/img2/neural (1).png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/connexion.css')); ?>">
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
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>    
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <label for="email" :value="__('Email')" class="mb-0" >

                                <input id="email" class="form-control input_user  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="nom" type="email" name="email" :value="old('email')"  />
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                      <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                           <label for="password" class="mb-0" :value="__('Password')"  >
                            <input id="password" class="form-control input_pass <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "  placeholder="mot de passe"
                                            type="password"
                                            name="password"/>
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>               
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">                            
                               <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600"><?php echo e(__('Souviens-toi de moi')); ?></span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                          
                                        <button class="btn login_btn" type="submit">
                                            <?php echo e(__('Connexion')); ?>

                                        </button>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                           
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 text-dark" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('mot de passe oublié ?')); ?>

                                </a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="<?php echo e(route('register')); ?>">
                            <?php echo e(__('Jai ne pas un compte?')); ?>

                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>












<?php echo $__env->make('layouts.inscrit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/auth/login.blade.php ENDPATH**/ ?>