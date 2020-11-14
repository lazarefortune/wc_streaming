<!doctype html>
<html lang="fr" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Procurez-vous votre Netflix">
    <meta name="author" content="Lazare Fortune, Mohamed Mama">
    <title>Streaming | Web Creation | @yield('title') </title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Edit CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/template_style.css') }}">

    <!-- icons -->
    <script src="https://kit.fontawesome.com/503d9b4d92.js" crossorigin="anonymous"></script>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/img/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    @yield('extra-css-template')


  </head>
  <body class="d-flex flex-column h-100">
    <header>
      <nav class="navbar navbar-icon-top navbar-expand-lg navbar-white menu shadow fixed-top pl-lg-5 pr-lg-5 pt-lg-3 pb-lg-3">
        <a class="navbar-brand my-0 mr-md-auto font-weight-normal"  id="site-title" href="{{ route('index') }}">
          <img src="{{ asset('assets/img/new/Streaming2.png') }}" width="190" height="40" class="d-inline-block align-top p-0 m-0" alt="logo-Web-Creation-streaming" title="logo de Web Creation Streaming">
        </a>
        @auth
          <a class="p-2  d-none d-sm-none d-md-block mr-2" href="{{ route('help') }}">
            Besoin d'aide ?
          </a>
        @else
        <a class="p-2  d-none d-sm-none d-md-block mr-2" href="{{ route('contact') }}">
          Nous contacter
        </a>
        @endauth



        @guest

          <a class="btn btn-primary  d-none d-sm-none d-md-block" href="{{ route('register') }}">
            S'inscrire
          </a>

          <a class="btn btn-success ml-2" href="{{ route('login') }}">
            Se connecter
          </a>
        @else

          <a href="{{ route('orders.index') }}" class="p-2 d-none d-sm-none d-md-block mr-2" type="button">
              <i data-feather="shopping-cart" stroke-width="2" width="20" height="20"></i>
              <span  class="text-icon">
                Mes commandes
              </span>
          </a>

          <div class="btn-group">

            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i data-feather="user" stroke-width="2" width="20" height="20"></i>
              <span class="d-none d-sm-none d-md-inline text-icon"> </span>
            </button>

            <div class="dropdown-menu dropdown-menu-right shadow-lg">
              <div class="card-body">
                <h6 class="text-center">
                  <strong>
                    @if(auth()->user()->isAdmin())
                      <i data-feather="user-check" stroke-width="2" width="16" height="16"></i>
                    @endif
                    <span class="text-icon">{{ auth()->user()->name }}</span>
                  </strong>
                </h6>
                <p class="text-center text-muted">
                  {{ auth()->user()->email }}
                  @if(empty(auth()->user()->email))
                  {{ auth()->user()->contact }}
                  @endif
                </p>

                @can('manage-users')
                  <div class="text-center">
                    <a href="{{ route('admin.home') }}" class="btn btn-sm btn-outline-light btn-menu text-dark" style="" name="button">
                      <span>
                        <i data-feather="shield" stroke-width="2" width="20" height="20"></i>
                      </span> Espace admin
                    </a>
                  </div>
                  <hr>
                @endcan

                <div class="text-center mb-3">
                  <a href="{{ route('orders.index') }}" class="d-block d-sm-block d-md-none" name="button">
                      <i data-feather="shopping-cart" stroke-width="2" width="20" height="20"></i>
                      <span  class="text-icon">
                        <b>Mes commandes</b>
                      </span>
                  </a>
                </div>

                <div class="text-center mb-3">
                  <a href="{{ route('users.index') }}"  class="" name="button">
                    <i data-feather="settings" stroke-width="2" width="20" height="20"></i>
                    <span  class="text-icon">
                      <b>Gérer votre compte</b>
                    </span>
                    <!-- <b>Gérer votre compte</b> -->
                  </a>
                </div>


                <div class="text-center mb-3">
                  <a href="{{ route('help') }}" class="d-block d-sm-block d-md-none" name="button">
                      <i data-feather="help-circle" stroke-width="2" width="20" height="20"></i>
                      <span  class="text-icon">
                        <b>Besoin d'aide</b>
                      </span>
                  </a>
                </div>

                <div class="text-center">
                  <a href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();"  class="btn btn-primary btn-block btn-logout" name="button">
                    <b>Déconnexion</b>
                  </a>
                  <form  id="logout-form" action="{{ route('logout') }}" method="POST" >
                      @csrf
                  </form>
                </div>
              </div>
              <!-- end card body -->
            </div>
            <!-- end dropdown menu -->
          </div>
          <!-- end div .btn-group -->
        @endguest
      </nav>
    </header>

    <!-- Begin page content -->

    <main role="main" class="flex-shrink-0 ">
      <div class="">
        @yield('content')
      </div>
    </main>

    <!-- end page content -->


    <!-- Footer -->
    <footer class="footer mt-auto bg-light mt-5">
      <div class="container">
        <div class="row pt-4 pb-4">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="{{ route('about') }}">A propos</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="{{ route('contact') }}">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="{{ route('privacy') }}">Politique de confidentialité</a>
              </li>

            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Web Creation 2020. Tous droits réservés.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            Retrouvez nous sur :
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i data-feather="facebook" stroke-width="2" width="20" height="20"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i data-feather="twitter" stroke-width="2" width="20" height="20"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i data-feather="instagram" stroke-width="2" width="20" height="20"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->


    <!-- Feather icons -->
    <script type="text/javascript">
    	feather.replace();
    </script>

  </body>
</html>
