  
 @extends('layouts.front')

   @section('title', 'Contact')
@section('css')
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/img2/contact-icon.jpg')}}">
    @endsection
@section('content')
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('assets/img/img2/contact-icon.jpg')}}" alt="">
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
                                            <a href="{{route('cart')}}">  <span class="fa fa-shopping-cart "></span></a>
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
                                    <a href="{{route('index')}}"><img src="{{asset('assets/img/logo/logo1.png')}}" width="95" height="60" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="{{route('index')}}">Accueil</a></li>
                                                <li><a href="{{route('index')}}">Services</a></li>
                                                <li><a href="{{route('article')}}">Articles</a></li>
                                                <li><a href="{{route('contact')}}">Contact</a></li>
                                                <li class="nav-item mx-1">
                                                    <a class="nav-link  font-weight-bold  text-dark" href="{{route('login')}}"> Connexion</a>
                                                </li>
                                                <li class="nav-item mx-1">
                                                    <a class="nav-link text-dark  font-weight-bold" href="{{route('register')}}"> Inscription</a>
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
        <div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center"></div>
        </div>
        <br>
        <br>
        <div class="container mt-50">
            <div class="row">
                <div class="col-12 mb-20">
                    <h2 class="contact-title">POSER VOTRE MESSAGE</h2>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                    </div>
                    <br>
                @endif
              <div class="col-lg-8">
            <form class="form-contact contact_form" action="" method="post" id="contactForm" >
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom'" placeholder="nom">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control valid" name="prenom" id="prenom" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prenom'" placeholder="Prenom">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="email" id="email" type="email" value="" required="" oldautocomplete="remove" autocomplete="off" placeholder="email">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="phone" id="phone" type="tel" value="" maxlength="32" placeholder="numero téléphone">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="  Message"></textarea>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button type="submit"name="send" class="button button-contactForm boxed-btn">Envoyer</button>
                </div>
            </div>
            </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>MONASTIR</h3>
                            <p>Qsibet Mediouni</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>(+216) 94 621 587</h3>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3 class=" my-auto">&nbsp;&nbsp;<a href="mailto:imprime2020@outlook.fr ">imprime2020@outlook.fr</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>      
@endsection