
 @extends('layouts.inscrit')
    @section('title', 'Inscription')
    @section('css')
    <link rel="stylesheet" href="{{asset('/assets/css/inscription.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/img2/inscription.png')}}">
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
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <label for="name" :value="__('Name')" class="mb-0" >

                            <input id="name" class="form-control input_user {{ $errors->has('name') ? ' is-invalid' : '' }}"type="text" placeholder="nom" name="name" value="{{ old('name') }}" required autofocus />
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <label for="name" :value="__('email')" class="mb-0" >
                            <input id="email" type="email" class="form-control input_user{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  placeholder="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <label for="name" :value="__('password')" class="mb-0" >
                             <input id="password" type="password" class="form-control input_pass{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="mot de passe" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                            </div> 
                            <label for="name" :value="__('confirm password')" class="mb-0" >
                            <input id="password-confirm" type="password" class="form-control input_pass" name="password_confirmation"  placeholder="confirmer mot de passe" required>
                        </div>                        
                        <button class="btn login_btn" type="submit">
                             {{ __('Créer un compte') }}
                        </button>
                        <div class="mt-2">
                            <div class="d-flex justify-content-center links">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Jai un compte?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>             
            </div>
        </div>
    </div>
@endsection







