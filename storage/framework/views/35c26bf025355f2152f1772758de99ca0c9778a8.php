<?php $__env->startSection('title', 'Acceuil'); ?>
<?php $__env->startSection('css'); ?>
       <!--css-->
       <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('/assets/img/logo/logo1.png')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--? logo circle-->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo e(asset('/assets/img/logo/logo1.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <header>
        <!-- menu -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left my-auto">
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
                                              <a href="<?php echo e(route('cart')); ?>">  <span class="fa fa-shopping-cart "></span></a>
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
                                                <?php if(auth()->guard()->check()): ?>
                                                    <?php if(auth()->user()->hasRole('Admin')): ?>
                                                        <li class="nav-item mx-1">
                                                            <a class="nav-link  font-weight-bold  text-dark" href="<?php echo e(route('admin.home')); ?>"> Espace admin</a>
                                                        </li>
                                                    <?php endif; ?>
                                                    <li class="nav-item mx-1">
                                                        <a class="nav-link text-dark  font-weight-bold" href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();"> Déconnexion</a>
                                                    </li>
                                                    <form id="logoutform" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                        <?php echo e(csrf_field()); ?>

                                                    </form>
                                                <?php else: ?>
                                                    <li class="nav-item mx-1">
                                                        <a class="nav-link  font-weight-bold  text-dark" href="<?php echo e(route('login')); ?>"> Connexion</a>
                                                    </li>
                                                    <li class="nav-item mx-1">
                                                        <a class="nav-link text-dark  font-weight-bold" href="<?php echo e(route('register')); ?>"> Inscription</a>
                                                    </li>
                                                <?php endif; ?>
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
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-7 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.5s">Bienvenue Sur Notre Site</span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.5s">QUEEN IMPRIME</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.5s">la bonne adresse pour toutes vos impressions</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay="0.5s">
                                        <a href="<?php echo e(route('login')); ?>" class="btn hero-btn ">Connexion</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-7 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.5s"> Bienvenue Sur Notre Site</span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.5s">QUEEN IMPRIME</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.5s">la bonne adresse pour toutes vos impressions</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay="0.5s">
                                        <a href="<?php echo e(route('login')); ?>" class="btn hero-btn">Connexion</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--image remis-->
        <div class=" text-center zoom my-2 col-12">
            <a href="<?php echo e(route('index')); ?>"> <img class="img-responsive" src="<?php echo e(asset('/assets/img/img2/55.png')); ?>" width="1090" height="150"></a>
        </div>
        <br>
        <!-- slider qui somme nous-->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70 ml-50 ">
                            <h2 class="animated animate__heartBeat">Qui somme Nous?</h2>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 ">
                    <div class="support-location-img opacity1 ml-10">
                        <img src="<?php echo e(asset('/assets/img/img2/services3.png')); ?>" class="rounded-circle" alt="img">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <div class="support-caption ml-40 mt-10">
                            <i class="pera-top">"QUEEN IMPRIME" est une société d'impression offset fondée en 2017 , Spécialisé dans L’impression offset.<br> L’impression offset est utilisée pour les éditions de qualité courante comme les livres, les catalogues, les
                                    prospectus et bien d’autres documents. Elle est également employée pour imprimer des emballages de qualité, sur des supports en carton entre autres. .<br> Imprimez tous vos documents: carte de visite, flyer , calendrier
                                    , carnet , papier entête...</i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service -->
            <div class="services-area section-padding3">
                <div class="container">
                    <div class="row">
                        <div class="section-tittle mb-70 ml-50 ">
                            <span>Our Best Services</span>
                            <h2 class="animated animate__heartBeat">Nos Top Services</h2>
                        </div>
                    </div>
                    <br>
                    <div class="row " id="b">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="single-cat text-center mb-50 ">
                                <div class="cat-icon py-2 ">
                                    <img src="<?php echo e(asset('/assets/img/img2/offseta.jpg')); ?>" alt="offset" height="90px" width="90px">
                                </div>
                                <div class="cat-cap">
                                    <h5>Impression offset </h5>
                                    <p>Vous avez un projet d’impression offset ? brochures, magazines, catalogues, manuels, annuaires .. Nous mettons notre savoir-faire à votre disposition afin de vous accompagner et de répondre à tous vos besoins.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="single-cat text-center mb-50">
                                <div class="cat-icon py-2">
                                    <img src="<?php echo e(asset('/assets/img/img2/graphique.png')); ?>" alt="graphique" height="90px" width="90px">
                                </div>
                                <div class="cat-cap">
                                    <h5>Création Graphique</h5>
                                    <p>Nous mettons à votre disposition une équipe de créatifs qui saura vous proposer différentes pistes graphiques pour la création de votre logo, votre charte graphique,vos cartes de visite.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="single-cat text-center mb-50">
                                <div class="cat-icon py-2">
                                    <img src="<?php echo e(asset('/assets/img/img2/sous traitance .png')); ?>" alt="offset" height="90px" width="90px">
                                </div>
                                <div class="cat-cap">
                                    <h5>service de sous traitance</h5>
                                    <p>La sous-traitance est le fait qu'une entreprise donnée confie partiellement sa production à une autre dans le cadre d'un travail de sous-œuvre.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--article-->
                <div class="row" id="a">
                    <div class="cl-xl-12 col-lg-12 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70 ml-120">
                            <span>Our Best Article</span>
                            <h2 class="animated animate__heartBeat">Nos Top Articles </h2>
                        </div>
                    </div>
                </div>
                <!--premier row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-catt text-center mb-50">
                            <div class="rotate">
                                <img src="<?php echo e(asset('/assets/img/img2/wedding-card.png')); ?>" alt=" carte" height="90px" width="90px">
                            </div>
                            <br>
                            <div>
                                <h5 class="text-info">
                                    Carte visite
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-catt text-center mb-50">
                            <div class="rotate">
                                <img src="<?php echo e(asset('assets/img/img2/flyer.png')); ?>" alt="flyer" height="90px" width="90px">
                            </div>
                            <br>
                            <div>
                                <h5 class="text-info">Flyers & Dépliants</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-catt text-center mb-50">
                            <div class="rotate">
                                <img src="<?php echo e(asset('assets/img/img2/calendar (1).png')); ?>" alt="calendrier" height="90px" width="90px">
                            </div>
                            <br>
                            <div>
                                <h5 class="text-info">calendrier</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-catt text-center mb-50">
                            <div class="rotate">
                                <img src="<?php echo e(asset('/assets/img/img2/carnet.png')); ?>" alt="carnet" height="90px" width="90px">
                            </div>
                            <br>
                            <div>
                                <h5 class="text-info">
                                    Carnet
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!--2eme row-->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-catt text-center mb-50">
                            <div class="rotate">
                                <img src="<?php echo e(asset('/assets/img/img2/file.png')); ?>" alt="papier" height="90px" width="90px" ">
                        </div>
                        <br>
                        <div >
                           <h5  class="text-info"> papier entête</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="single-catt text-center mb-50 ">
                        <div class="rotate ">
                            <img src="<?php echo e(asset('/assets/img/img2/bb.png')); ?> " alt="livre " height="90px " width="90px ">
                        </div>
                        <br>
                        <div >
                            <h5 class="text-info">livre</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="single-catt text-center mb-50 ">
                        <div class="rotate ">
                            <img src="<?php echo e(asset('/assets/img/img2/invtation.png')); ?> " alt="Invitation " height="90px " width="90px ">
                        </div>
                        <br>
                        <div >
                            <h5  class="text-info">
                               Invitation de mariage
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="single-catt text-center mb-50 ">
                        <div class="rotate ">
                            <img src="<?php echo e(asset('/assets/img/img2/Orandonnance.png')); ?> " alt="Ordonnance " height="90px " width="90px ">
                        </div>
                        <br>
                        <div >
                            <h5  class="text-info">Ordonnance</h5>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!--3eme ligne-->
            <div class="row ">
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="single-catt text-center mb-50 ">
                        <div class="rotate ">
                            <img src="<?php echo e(asset('/assets/img/img2/open-book.png')); ?> " alt="Paquet " height="90px " width="90px ">
                        </div>
                        <br>
                        <div >
                            <h5  class="text-info">Boite/Paquet</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="single-catt text-center mb-50 ">
                        <div class="rotate ">
                            <img src="<?php echo e(asset('/assets/img/img2/ettiquet.png')); ?> " alt="Etiquette " height="90px " width="90px ">
                        </div>
                        <br>
                        <div >
                            <h5  class="text-info">
                                Etiquette
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="single-catt text-center mb-50 ">
                        <div class="rotate ">
                            <img src="<?php echo e(asset('assets/img/img2/port doc.png')); ?> " alt="Porte " height="90px " width="90px ">
                        </div>
                        <br>
                        <div >
                            <h5  class="text-info">Porte Document</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="single-catt text-center mb-50 ">
                        <div class="rotate ">
                            <img src="<?php echo e(asset('assets/img/img2/notepad.png')); ?>" alt="bloc note " height="90px " width="90px ">
                        </div>
                        <br>
                        <div >
                            <h5  class="text-info">bloc note</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--img-->
        <div class="testimonial-area testimonial-padding " data-background="<?php echo e(asset('assets/img/gallery/FOND4.jpg')); ?> ">
            <div class="container ">
                <h1  class="text-center text-danger " style="font-family: 'Courgette',cursive; ">QUEEN IMPRIME</h1>
            </div>
        </div>
        <!--atouts-->
        <div class="team-area section-padding30 ">
            <div class="container ">
                <div class="row ">
                                    <div class="cl-xl-12 col-lg-8 col-md-10 ">
                                        <!-- Section Tittle -->
                                        <div class="section-tittle mb-70 ">
                                            <span>Our Assets </span>
                                            <h2>Nos Atouts </h2>
                                        </div>
                                    </div>
                </div>
                <div class="row ">            
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center ">
                        <div class="single-team mb-30 ">
                                <div class="team-img ">
                                    <img src="<?php echo e(asset('assets/img/img2/innovation.png')); ?> " alt=" ">
                                </div>
                                <div class="team-caption ">
                                     <h3><a href="# ">Rapidité</a></h3>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center ">
                            <div class="single-team mb-30 ">
                                <div class="team-img ">
                                    <img src="<?php echo e(asset('assets/img/img2/reliability.png ')); ?>" alt=" ">
                                </div>
                                <div class="team-caption ">
                                    <h3><a href="# ">Fiabilité</a></h3>
                                               
                                </div>
                            </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center ">
                            <div class="single-team mb-30 ">
                                <div class="team-img ">
                                    <img src="<?php echo e(asset('assets/img/img2/secure-shield.png')); ?> " alt=" ">
                                </div>
                                <div class="team-caption ">
                                    <h3><a href="# ">Sécurité</a></h3>         
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>     
    </main>                    
<?php $__env->stopSection(); ?>
      


<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/front/index.blade.php ENDPATH**/ ?>