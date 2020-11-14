@extends('layouts.style')

@section('title', 'Inscription')

@section('extra-css-style')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')

<header class="d-sm-block d-md-none d-lg-none ">
  <nav class="navbar navbar-expand-md navbar-white shadow mt-1 fixed-top bg-white d-flex justify-content-between">
    <a href="{{ route('index') }}" class="btn btn-flat">
      <i data-feather="arrow-left" stroke-width="2.5" width="16" height="16"></i>
    </a>
    <a href="{{ route('index') }}" ><img src="{{ asset('assets/img/new/Streaming2.png') }}" width="190" height="40" class="d-inline-block align-top p-0 m-0" alt="logo-Web-Creation-streaming" title="logo de Web Creation Streaming"></a>
    <!-- <button type="button" name="button" class="btn btn-primary">heo</button> -->
  </nav>
</header>

<form class="form-signin" method="POST" action="{{ route('register') }}">
  @csrf
  <div class="text-center mb-4 d-none d-sm-none d-md-block">
    <a href="{{ route('index') }}">
      <img src="{{ asset('assets/img/new/Web_Creation.png') }}" class="d-none d-sm-none d-md-inline" width="50%" height="auto" alt="logo-Web-Creation" title="logo de Web Creation">
    </a>
    <!-- <h1 class="h3 mb-3 font-weight-normal"> <b>Se connecter</b> </h1> -->
  </div>
  {{-- <h3 class="text-center font-weight-bold mt-5 mt-sm-5 mt-lg-0 mb-4" style="color: #677987 !important;">
    Inscription
  </h3> --}}
  <h5 class="text-center font-weight-bold mt-5 mt-sm-5 mt-lg-0 mb-4 text-muted">
    Inscrivez vous et bénéficier de tous nos services
  </h5>

  <!-- <a href="{{ url('auth/facebook') }}" class="btn btn-lg btn-primary btn-block">
        <strong>Login With Facebook</strong>
    </a> -->
  <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div>
  <hr>
  <a href="{{ url('auth/google') }}" style="margin-top: 20px;" class="btn btn-lg btn-success btn-block">
    <strong>Login With Google</strong>
  </a> -->

  <div class="form-label-group">
    <input  id="inputName" placeholder="Nom" type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name" >
    <label for="inputName">Nom</label>
    @error('name')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>

  <div class="form-label-group">
    <input  id="inputContact" placeholder="Numéro de téléphone (Ex: 24166112233)" type="tel" value="{{ old('contact') }}" min="11" maxlength="11" class="form-control @error('contact') is-invalid @enderror" name="contact" autocomplete="contact" >
    <label for="inputContact">Numéro de téléphone (Ex: 24166112233)</label>
    <!-- <small class="ml-3">Exemple: 24166112233 (sans indicatif)</small> -->
    @error('contact')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>

  <div class="form-label-group">
    <input  id="inputEmail" placeholder="E-mail (Facultatif)" type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="email" >
    <label for="inputEmail">E-mail (Facultatif)</label>
    @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>

  <div class="form-label-group ">
    <input id="inputPassword" placeholder="Mot de passe" type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
    <label for="inputPassword">Mot de passe </label>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

  <div class="checkbox mb-3 text-center">
    <div class="custom-control custom-checkbox">
        <input class="custom-control-input" type="checkbox" name="conditions" id="conditions"  {{ old('conditions') ? 'checked' : '' }} required>
        <label class="custom-control-label" for="conditions">
            J'accepte les <a href="{{ route('privacy') }}">conditions d'utilisation</a>
        </label>
    </div>
  </div>

  <button class="btn  btn-primary btn-block btn-lg" type="submit">
    <strong>S'inscrire</strong>
  </button>


  <div class="row px-3 mt-4 mb-1">
    <div class="line"></div>
    <small  class="or text-center">Ou</small>
    <div class="line"></div>
  </div>
  <div class="p-4 d-flex justify-content-center">
    <a href="{{ route('login') }}"  class="btn btn-success " type="button" name="button">
      <strong>Se connecter</strong>
    </a>
  </div>
  <!-- <p class=" text-muted text-center">&copy; 2020 <a href="">En savoir plus </a> </p> -->
</form>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact">

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
