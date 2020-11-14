@extends('layouts.template')

@section('title', 'Accueil')

@section('extra-css-template')

  <link rel="stylesheet" href="css/user/index.css">
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/sweetalert.css') }}"> -->
  <!-- <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script> -->
@endsection

@section('content')

<section id="hero" class="">

          <div class="container">

            <div class="row">
              <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Découvrez nos offres de <a href="">streaming</a> </h1>
                <h2 class="text-muted">Des films et séries illimités, sur tous vos écrans, partout au Gabon </h2>
                <div class="d-lg-flex">
                  <a href="#offres" class="btn-get-started scrollto">
                    Commencer
                    <i data-feather="arrow-right" stroke-width="2" width="16" height="16"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" style="margin-top: 120px !important;" data-aos-delay="200">
                <img src="assets/img/Web devices.png" class="img-fluid animated" alt="">
              </div>
            </div>
          </div>


        </section>

        <!-- End Hero -->


        <!-- ======= About Us Section ======= -->
    <section id="about" class="about bg-light">
      <div class="container" data-aos="fade-up">

        <div class="section-title my-0">
          <h2 class="text-center">Comment faire ?</h2>
        </div>

        <div class="container">
          <div class="row text-center">
            <div class="col-lg-4">
              <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <div class="features-icons-icon d-flex justify-content-center mb-2">
                  <i data-feather="shopping-cart" stroke-width="2" width="60" height="60" color="#0944b3"></i>
                </div>
                <h3>Commandez</h3>
                <p class="lead mb-0">Choisissez parmis nos offres celle qui vous convient, et cliquez sur "Commander" </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <div class="features-icons-icon d-flex justify-content-center mb-2">
                  <i data-feather="credit-card" stroke-width="2" width="60" height="60" color="#d2de2a"></i>
                </div>
                <h3>Payez</h3>
                <p class="lead mb-0">Payez votre commande via Airtel Money et Mobicash en 2 clics</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <div class="features-icons-icon d-flex justify-content-center mb-2">
                  <i data-feather="check-circle" stroke-width="2" width="60" height="60" color="green"></i>
                </div>
                <h3>Profitez</h3>
                <p class="lead mb-0">Obtenez vos identifiants de connexion à vos comptes et profitez.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->



        <section id="offres">

          <div class="container">
            <div class="section-title my-0">
              <h2 class="text-center">Nos offres</h2>
            </div>

            <div class="pricing-header px-3 mb-3 pb-md-4 mx-auto text-center">
              <!-- <h1 class="display-4 font-weight-bold"> <strong>Netflix</strong> </h1> -->
              <img src="assets/img/netflix.png" alt="" width="180" height="auto">
              <!-- <p class="lead">
                Passez votre commande, procédez au paiement, et profitez !!.
              </p> -->
              <!-- <a href=""  class="card-link text-danger" name="button">
                En savoir plus <i data-feather="arrow-right" stroke-width="2.5" width="20" height="20"></i>
              </a> -->
            </div>

            <div class="card-deck mb-3 text-center">
              <div class="card mb-4 shadow">
                <div class="card-body">
                  <div class="mb-2 pb-2 border-bottom rounded-bottom rounded-lg">
                    <h4 class="my-0 font-weight-normal"> <strong>Gratuit</strong> </h4>
                  </div>
                  <h2 class="card-title pricing-card-title"> 0 Fcfa<small class="text-muted">/ mo</small></h2>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>Participer au jeu concours pour:</li>
                    <li>1 mois de connexion</li>
                  </ul>
                  <a href="" class="btn btn-lg btn-block btn-outline-primary">
                    <i data-feather="play" stroke-width="2.5" width="20" height="20"></i>
                    <b class="text-icon">Participer</b>
                  </a>
                </div>
              </div>

              <div class="card mb-4 shadow">
                <div class="card-body">
                  <div class="mb-2 pb-2 border-bottom rounded-bottom rounded-lg">
                    <h4 class="my-0 font-weight-normal"> <strong>Standard</strong> </h4>
                  </div>
                  <h2 class="card-title pricing-card-title"> 4100 Fcfa<small class="text-muted">/ mo</small></h2>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>1 Ecran</li>
                    <li>Films et séries illimités</li>
                  </ul>
                  <a href="" class="btn btn-lg btn-block btn-primary">
                    <i data-feather="shopping-cart" stroke-width="2.5" width="20" height="20"></i>
                    <b class="text-icon">Commander</b>
                  </a>
                </div>
              </div>

              <div class="card mb-4 shadow">
                <div class="card-body">
                  <div class="mb-2 pb-2 border-bottom rounded-bottom rounded-lg">
                    <h4 class="my-0 font-weight-normal"> <strong>Pro</strong> </h4>
                  </div>
                  <h2 class="card-title pricing-card-title"> 14500 Fcfa<small class="text-muted">/ mo</small></h2>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li><span class="text-danger">5</span> Ecrans</li>
                    <li>Films et séries illimités</li>
                  </ul>
                  <a href="" class="btn btn-lg btn-block btn-primary">
                    <i data-feather="shopping-cart" stroke-width="2.5" width="20" height="20"></i>
                    <b class="text-icon">Commander</b>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </section>


@endsection
