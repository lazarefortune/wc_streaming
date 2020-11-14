@extends('layouts.template')


@section('title', 'Accueil')

@section('extra-css-template')

  <link rel="stylesheet" href="css/user/index.css">
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/sweetalert.css') }}"> -->
  <!-- <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script> -->
@endsection

@section('content')

<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item active" aria-current="page">Mes-commandes</li>
    </ol>
  </nav>

  <!-- @include('flash::message') -->

  @if($orders->count() == 0)
    <div class="alert alert-primary text-center">
      Vous n'avez aucune commande
    </div>

    <div class="row d-flex justify-content-center">
      <a href="{{ route('index') }}"  class="btn btn-primary">
        <i data-feather="mouse-pointer" stroke-width="2.5" width="16" height="16"></i>
        <span class="text-icon">Faire une commande</span>
        <!-- <i data-feather="arrow-right-c ircle" stroke-width="2.5" width="16" height="16"></i> -->
      </a>
    </div>
  @endif

  <div class="row d-flex justify-content-around">
    <ol>
      @foreach($orders as $order)
        <li>Commande n ° {{ $order->id }}</li>
      @endforeach
    </ol>
  </div>
  <!-- end row -->
</div>

@endsection
