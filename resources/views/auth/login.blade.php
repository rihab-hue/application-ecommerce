@extends('layouts.inscrit')
    @section('title', 'Connexion')
    <!-- CSS here -->
    @section('css')
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/img/img2/neural (1).png')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/connexion.css')}}">
    @endsection
    @section('content')
    <div class="container  h-100 mt-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="{{asset('assets/img/img2/avatar.jpg')}}" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}    
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <label for="email" :value="__('Email')" class="mb-0" >

                                <input id="email" class="form-control input_user  @error('email') is-invalid @enderror"  placeholder="nom" type="email" name="email" :value="old('email')"  />
                                @error('email')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                           <label for="password" class="mb-0" :value="__('Password')"  >
                            <input id="password" class="form-control input_pass @error('password') is-invalid @enderror "  placeholder="mot de passe"
                                            type="password"
                                            name="password"/>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror               
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">                            
                               <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Souviens-toi de moi') }}</span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                          
                                        <button class="btn login_btn" type="submit">
                                            {{ __('Connexion') }}
                                        </button>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                           
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 text-dark" href="{{ route('password.request') }}">
                                    {{ __('mot de passe oublié ?') }}
                                </a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                            {{ __('Jai ne pas un compte?') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection











