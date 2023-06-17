
@extends('layouts.front')
@section('title', 'Article')
@section('css')
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/img2/produit-icon.png')}}">
    @endsection
@section('content')
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('assets/img/img2/produit-icon.png')}}" alt="">
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
                                    <a href="index.html"><img src="{{asset('assets/img/logo/logo1.png')}}" width="95" height="60" alt=""></a>
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
        <!-- article  title-->
        <div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Nos Articles</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--portfolio-->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <h2>Portfolio</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($articles as $key => $article)
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="single-cat text-center mb-50 ">
                                <div class="cat-icon py-2 ">
                                <img src="{{asset($article->getImagePath())}}" 
                                    alt="offset"
                                    height="200px" 
                                    width="300px">
                                </div>
                                <div class="cat-cap">
                                    <h5>
                                    <a href="{{route('article_detail', ['id' =>  $article->id])}}">{{ $article->titre }} </a>
                                    </h5>
                                    <a href="{{route('article_detail', ['id' =>  $article->id])}}" class="text-danger"> Voir Détails...</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>    
@endsection
