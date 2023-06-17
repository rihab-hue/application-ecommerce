@extends('layouts.front')
    @section('title', 'Article Details' )
    @section('css')
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/img2/configuration.png')}}">
        <link rel="stylesheet" href="{{asset('assets/css/conf1.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/conf2.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}" /> 

    @endsection
    @section('content')
    <!--? logo circle -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('assets/img/img2/configuration.png')}}" alt="">
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
                                        <p class=" my-auto">
                                        <i class="fa fa-envelope text-white" aria-hidden="true"></i>
                                        &nbsp;&nbsp;
                                        <a class="text-white" href="mailto:imprime2020@outlook.fr ">
                                        imprime2020@outlook.fr</a>
                                        </p>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li>
                                            <a href="https://www.facebook.com/queen.imprime">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <span class="shopping-cart my-auto">
                                            <a href="{{route('cart')}}"> 
                                                <span class="fa fa-shopping-cart "></span>
                                             </a>
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
                                    <a href="{{route('index')}}">
                                    <img src="{{asset('assets/img/logo/logo1.png')}}" 
                                    width="95" 
                                    height="60" 
                                    alt="">
                                    </a>
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
        <!--? configuration -->
        <div class="slider-area3">
            <div class="slider-height2 hero-overly2 d-flex align-items-center"></div>
        </div>
        <div id="content-wrapper">
            <section id="main" itemscope="" itemtype="">
                <meta itemprop="url" content="">
                <h1 class="h1" itemprop="name"> 
                {{ $article->titre }}
                </h1>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <section class="page-content horizontal_mode" id="content">
                            <div class="images-container">
                                <div class="product-cover mt-100">
                                    <img class="js-qv-product-cover img-responsive ml-20"
                                     src="{{asset($article->getImagePath())}}" 
                                     style="max-width:100%;height:auto"
                                      itemprop="image"
                                       width="888"
                                        height="1000">
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--formulaire-->
                    <div class="col-md-8">
                        <div class="product-actions col-md-12">
                            <form action=""
                             method="post"
                             name="cardForm"
                             on-submit='addToCart()'
                              id="add-to-cart-or-refresh">
                                <div class="col-md-6">
                                    <div id="params" class="container ">
                                    <div id="LstOptions" style=" margin-top: 20px;">
                                        <div class="form-group row "><b style="text-decoration: underline;color: #444"> </b></div>
                                        @if (count($article->formats) > 0)
                                        <div class="form-group row ">
                                                <div class="row col-md-12">
                                                    <span>
                                                       <span class="nameParam" idoption="format">Format:</span>
                                                    </span>
                                                </div>
                                                <div class="row col-md-12">
                                                    <select class="form-control" 
                                                     onchange="calculateTotalAmount()"
                                                      name="format"  
                                                      style="height: 38px !important;min-height: 38px">
                                                            <option value="-1">-- Faites un choix --</option>
                                                            @foreach($article->formats as $key => $format)
                                                            <option value="{{ $format->pivot->prix }} ">{{ $format->nom }} </option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>    
                                        @endif
                                        @if (count($article->papiers) > 0)    
                                            <div class="form-group row ">
                                                <div class="row col-md-12">
                                                    <span>
                                                        <span class="nameParam" idoption="papier_1">Papier:</span>
                                                    </span>
                                                </div>
                                                <div class="row col-md-12">
                                                    <select class="form-control" 
                                                    onchange="calculateTotalAmount()"
                                                      name="papier"
                                                      style="height: 38px !important;min-height: 38px">
                                                            <option value="-1">-- Faites un choix --</option>
                                                            @foreach($article->papiers as $key => $papier)
                                                            <option value="{{ $papier->pivot->prix }} ">{{ $papier->nom }} </option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endif
                                        @if (count($article->impressions) > 0)        
                                            <div class="form-group row ">
                                                <div class="row col-md-12">
                                                    <span>
                                                        <span class="nameParam" 
                                                        idoption="impression_1">Impression:</span>
                                                    </span>
                                                </div>
                                                <div class="row col-md-12">
                                                    <select class="form-control" 
                                                    onchange="calculateTotalAmount()"
                                                      name="impression"
                                                       style="height: 38px !important;min-height: 38px">
                                                            <option value="-1">-- Faites un choix --</option>
                                                            @foreach($article->impressions as $key => $impression)
                                                            <option value="{{ $impression->pivot->prix }} ">{{ $impression->nom }} </option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endif 
                                        @if (count($article->pelliculages) > 0)        
                                            <div class="form-group row ">
                                                <div class="row col-md-12">
                                                    <span>
                                                        <span class="nameParam" 
                                                        idoption="impression_1">pelliculages:</span>
                                                    </span>
                                                </div>
                                                <div class="row col-md-12">
                                                    <select class="form-control" 
                                                    onchange="calculateTotalAmount()"
                                                      name="pelliculage"
                                                       style="height: 38px !important;min-height: 38px">
                                                            <option value="-1">-- Faites un choix --</option>
                                                            @foreach($article->pelliculages as $key => $pelliculage)
                                                            <option value="{{ $pelliculage->pivot->prix }} ">{{ $pelliculage->nom }} </option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endif  
                                        @if (count($article->nbr_exemplaires) > 0)        
                                            <div class="form-group row ">
                                                <div class="row col-md-12">
                                                    <span>
                                                        <span class="nameParam" 
                                                        idoption="impression_1">nbr Exemplaires:</span>
                                                    </span>
                                                </div>
                                                <div class="row col-md-12">
                                                    <select class="form-control" 
                                                    onchange="calculateTotalAmount()"
                                                      name="nbr_exemplaire"
                                                       style="height: 38px !important;min-height: 38px">
                                                            <option value="-1">-- Faites un choix --</option>
                                                            @foreach($article->nbr_exemplaires as $key => $nbrExemplaire)
                                                            <option value="{{ $nbrExemplaire->pivot->prix }} ">{{ $nbrExemplaire->nbr_exp }} </option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endif    
                                        @if (count($article->nbr_couleurs) > 0)        
                                            <div class="form-group row ">
                                                <div class="row col-md-12">
                                                    <span>
                                                        <span class="nameParam" 
                                                        idoption="impression_1">nbr Couleurs:</span>
                                                    </span>
                                                </div>
                                                <div class="row col-md-12">
                                                    <select class="form-control" 
                                                    onchange="calculateTotalAmount()"
                                                      name="nbr_couleur"
                                                       style="height: 38px !important;min-height: 38px">
                                                            <option value="-1">-- Faites un choix --</option>
                                                            @foreach($article->nbr_couleurs as $key => $nbrCouleur)
                                                            <option value="{{ $nbrCouleur->pivot->prix }} ">{{ $nbrCouleur->nbr_coul }} </option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endif   
                                        @if ($article->titre === "carnet" ||
                                            $article->titre === "bloc note")      
                                            <div class="form-group row ">
                                                <div class="row col-md-12">
                                                    <span>
                                                            <span class="nameParam" 
                                                            idoption="nbr_exp_2">Nombre de Feuilles:</span>
                                                    </span>
                                                </div>
                                                <div class="row col-md-12">
                                                <div class="row col-md-12">
                                                    <input type="number"
                                                     onchange="calculateTotalAmount()"
                                                      name="nbr_feuille"
                                                       min="30">
                                                </div>
                                                </div>
                                            </div>
                                        @endif       
                                        <div class="form-group row ">
                                            <div class="row col-md-12">
                                                <span>
                                                    <span class="nameParam"
                                                    idoption="qty">Quantité:</span>
                                                </span>
                                            </div>
                                            <div class="row col-md-12">
                                                <input type="number"
                                                onchange="calculateTotalAmount()"
                                                    name="quantity">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!--calculer prix-->
                                <div class="col-md-6">
                                    <div class="product-prices">
                                        <div class="product-price h5 " itemprop="offers" itemscope="" itemtype="">
                                            <link itemprop="availability" href="">
                                            <meta itemprop="priceCurrency" content="TND">
                                            <div class="current-price">
                                                <span itemprop="price" content="0" style="font-size: 24px;">Configurer votre article</span>
                                                <input class="w3-input w3-border" 
                                                name="totalAmount" 
                                                id="totalAmount"
                                                 type="text"
                                                  readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <style type="text/css">
                                        .product-add-to-cart {
                                            display: none;
                                        }
                                        
                                        .add-to-cart-infobia {
                                            background: #ef5f96;
                                            font-size: 15px;
                                            height: auto;
                                            line-height: 26px;
                                            padding: 7px 15px;
                                            text-transform: uppercase;
                                            margin-top: 0.4cm;
                                            margin-left: 100px;
                                        }
                                        
                                        .shortDescriptionInfobia {
                                            display: none;
                                        }
                                    </style>
                                    <button type="button"  class="btn btn-danger add-to-cart-infobia" 
                                     onclick="addToCart({{ $article->id }})" data-name="cart">
                                           <i class="fa fa-shopping-cart shopping-cart"></i>
                                              Ajouter au panier
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>    
@endsection
@section('js')
<!--ajouter panier -->
<script src="{{asset('assets/js/panier.js')}}"></script>
<script src="{{asset('assets/js/form-handler.js')}}"></script>
<!-- route  -->
<script src="{{asset('assets/js/route-handler.js')}}"></script>
<!-- calcule prix article-->
<script src="{{asset('assets/js/article.js')}}"></script>
@endsection