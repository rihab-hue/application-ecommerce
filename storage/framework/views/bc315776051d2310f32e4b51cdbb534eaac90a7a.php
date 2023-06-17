<?php $__env->startSection('title', 'Panier'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/img2/panier.jpg')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/conf3.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo e(asset('assets/img/img2/panier.jpg')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <p class=" my-auto"><i class="fa fa-envelope text-white" aria-hidden="true"></i>&nbsp;&nbsp;<a class="text-white" href="mailto:imprime2020@outlook.fr ">imprime2020@outlook.fr</a></p>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="https://www.facebook.com/queen.imprime"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li>
                                            <span class="shopping-cart my-auto">
                                                <span class="fa fa-shopping-cart "></span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="<?php echo e(route('index')); ?>"><img src="<?php echo e(asset('/assets/img/logo/logo1.png')); ?>" width="95" height="60" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="<?php echo e(route('index')); ?>">Accueil</a></li>
                                                <li><a href="#b">Services</a></li>
                                                <li><a href="<?php echo e(route('article')); ?>">Articles</a></li>
                                                <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                                                <li class="nav-item mx-1">
                                                    <a class="nav-link font-weight-bold text-dark" href="<?php echo e(route('login')); ?>"> Connexion</a>
                                                </li>
                                                <li class="nav-item mx-1">
                                                    <a class="nav-link text-dark font-weight-bold" href="<?php echo e(route('register')); ?>"> Inscription</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area3">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
            </div>
        </div>
        <!--panier-->
        <div id="content-wrapper">
            <section id="main">
                <div class="cart-grid row">
                    <div class="cart-grid-body col-xs-12 col-lg-8">
                        <!-- cart products detailed -->
                        <table id="cart" class="table table-hover table-condensed mt-20">
                                <thead>
						        <tr>
                                    <th style="width:50%">Articles</th>
                                    <th style="width:10%">Prix</th>
                                    <th style="width:8%">Quantité</th>
                                    <th style="width:10%"></th>
						        </tr>
					            </thead>
                                <tbody>
                        <?php if(session('cart')): ?>
                            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $cartArticle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-3 hidden-xs">
                                                <img src="<?php echo e(asset($cartArticle['imagePath'])); ?>" 
                                                width="100"
                                                height="100"
                                                class="img-responsive"/>
                                                </div>
                                                <div class="col-sm-9">
                                                    <h4 class="nomargin"><?php echo e($cartArticle['titre']); ?></h4>
                                                </div>
                                            </div>
                                        </td>                                    
                                        <td > <?php echo e($cartArticle['totalAmount']); ?>&nbsp;TND</td>
                                        <td ><?php echo e($cartArticle['quantity']); ?></td>
                                        <td class="actions " data-th="">
                                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="<?php echo e($id); ?>" ><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <div class="card cart-container ml-40 mt-100">
                                <div class="card-block ">
                                    <h1 class="h1 pl-20 pt-20 text-danger" style="font-family:'Poppins';">Panier</h1>
                                </div>
                                <hr>
                                <div class="cart-overview js-cart" data-refresh-url="">
                                    <span class="no-items">Il n'y a plus d'article dans votre panier</span>
                                </div>
                            </div>
                            <?php endif; ?>
                        </tbody>
                     </table>    
                        <hr>
                            <button type="button" class="btn btn-danger  ml-40" onclick="redirectTo('Article')">Continuer mes achats</button>
                    </div>
                    <!-- Right Block: cart subtotal & cart total -->                                    
                    <div class="cart-grid-right col-xs-12 col-lg-4">
                        <div class="card cart-summary ml-40 mt-100">
                            <div class="cart-detailed-totals">
                                <div class="card-block">
                                    <div class="cart-summary-line" id="cart-subtotal-shipping">
                                        <span class="label">
                                            Livraison
                                        </span>
                                        <span class="value">gratuit</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-block">
                                 <!--calcule total panier -->
                                    <form name='form' >
                                        <div class="cart-summary-line cart-total">
                                        <?php $total = 0 ?>
                                        <?php $__currentLoopData = (array) session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id =>$cartArticle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $total = $total + $cartArticle['totalAmount'] ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                            <span class="label">Total </span>
                                            <span class="value"name='total'> <?php echo e($total); ?>&nbsp;TND </span>
                                        </div>
                                    </form>
                                </div>
                                <hr>
                            </div>
                            <div class="checkout cart-detailed-actions card-block">
                                <div class="text-center mb-20 ">
                                    <button type="button" class="btn btn-danger" >Commander</button>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </section>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<!--delete de panier -->
<script type="text/javascript">
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '<?php echo e(url('remove-from-cart')); ?>',
                    method: "DELETE",
                    data: {_token: '<?php echo e(csrf_token()); ?>', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
</script>
<script src="<?php echo e(asset('assets/js/panier.js')); ?>"></script>
<!--route -->
<script src="<?php echo e(asset('assets/js/route-handler.js')); ?>"></script>
<?php $__env->stopSection(); ?>    

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/front/cart.blade.php ENDPATH**/ ?>