<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS here -->
   <?php echo $__env->yieldContent('css'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/slicknav.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('/assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('/assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('assets/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/bootstrap-icons.css')); ?> ">
  
</head>
<body>
<?php echo $__env->yieldContent('content'); ?>
            <!-- Jquery, Popper, Bootstrap -->
            <script src="<?php echo e(asset('/assets/js/jequery.min.js')); ?> "></script>
            <script src="<?php echo e(asset('/assets/js/popper.min.js')); ?> "></script>
            <script src="<?php echo e(asset('/assets/js/bootstrap.min.js')); ?> "></script>
        <?php echo $__env->yieldContent('js'); ?>
</body>
</html>


<?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/layouts/inscrit.blade.php ENDPATH**/ ?>