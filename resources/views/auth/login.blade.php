@extends('layouts.style')

@section('title', 'Connexion')

@section('extra-css-style')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')

<header class="d-sm-block d-md-none d-lg-none ">
          <nav class="navbar shadow mt-1 navbar-expand-md navbar-white fixed-top bg-white d-flex justify-content-between">
            <a href="{{ route('index') }}" class="btn btn-flat">
              <i data-feather="arrow-left" stroke-width="2.5" width="16" height="16"></i>
            </a>
            <a href="{{ route('index') }}" ><img src="{{ asset('assets/img/new/Streaming2.png') }}" width="190" height="40" class="d-inline-block align-top p-0 m-0" alt="logo-Web-Creation-streaming" title="logo de Web Creation Streaming"></a>
            <!-- <button type="button" name="button" class="btn btn-primary">heo</button> -->
          </nav>
        </header>

        <form class="form-signin" method="POST" action="{{ route('login') }}">
          @csrf
          <div class="text-center mb-4 d-none d-sm-none d-md-block">
            <a href="{{ route('index') }}">
              <img src="{{ asset('assets/img/new/Web_Creation.png') }}" class="d-none d-sm-none d-md-inline" width="50%" height="auto" alt="logo-Web-Creation" title="logo de Web Creation">
            </a>
            <!-- <h1 class="h3 mb-3 font-weight-normal"> <b>Se connecter</b> </h1> -->
          </div>
          <h3 class="text-center font-weight-bolder mt-5 mt-sm-5 mt-lg-0 mb-4" style="color: #677987 !important;">Se connecter</h3>


          <!-- <a href="{{ url('auth/facebook') }}" class="btn btn-lg btn-primary btn-block">
                <strong>Login With Facebook</strong>
            </a> -->
          <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div>
          <hr>
          <a href="{{ url('auth/google') }}" style="margin-top: 20px;" class="btn btn-lg btn-success btn-block">
            <strong>Login With Google</strong>
          </a> -->

          <div class="form-label-group">
            <input type="text" id="inputEmail"
                   class="form-control {{ $errors->has('contact') || $errors->has('email') ? ' is-invalid' : '' }}"
                   name="login" value="{{ old('contact') ?: old('email') }}" placeholder="Téléphone ou e-mail" required>
            <label for="inputEmail">Téléphone ou e-mail</label>

            @if ($errors->has('contact') || $errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('contact') ?: $errors->first('email') }}</strong>
                </span>
            @endif
          </div>

          <div class="form-label-group">
            <input id="inputPassword" placeholder="Mot de passe" type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
            <label for="inputPassword">Mot de passe</label>
            <!-- <input type="checkbox" onclick="myFunction()"> -->
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>


          <div class="checkbox mb-3">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }} >
                <label class="custom-control-label" for="remember">
                    {{ __('Rester connecté') }}
                </label>
            </div>
          </div>
          <button class="btn  btn-primary btn-block btn-lg" type="submit">
            <strong>Connexion</strong>
          </button>

          <div class="mt-2 mb-4 d-flex justify-content-center">
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                <strong class="text-color">{{ __('Mot de passe oublié ?') }}</strong>
            </a>
            @endif
          </div>
          <div class="row px-3 mt-4 mb-1">
            <div class="line"></div>
            <small  class="or text-center">Ou</small>
            <div class="line"></div>
          </div>
          <div class="p-4 d-flex justify-content-center">
            <a href="{{ route('register') }}"  class="btn btn-success " type="button" name="button">
              <strong>Créer un compte</strong>
            </a>
          </div>
          <!-- <p class="mt-5 mb-3 text-muted text-center">&copy; 2020</p> -->
        </form>


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address or contact') }}</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control {{ $errors->has('contact') || $errors->has('email') ? ' is-invalid' : '' }}" name="login" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @if ($errors->has('contact') || $errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('contact') ?: $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
