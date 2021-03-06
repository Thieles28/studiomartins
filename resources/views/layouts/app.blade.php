<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Studio Martins') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('img/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/argon.css') }}" rel="stylesheet">
</head>
<body class="bg-default">
@yield('sidenav')
 <div class="main-content">
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
         <div class="container px-4">
             <a class="navbar-brand" href="{{ url('/') }}">
                 <img src="{{ asset('img/brand/white.png') }}" />
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbar-collapse-main">
                 <!-- Collapse header -->
                 <div class="navbar-collapse-header d-md-none">
                     <div class="row">
                         <div class="col-6 collapse-brand">
                             <a href="#">
                                 <img src="{{ asset('img/brand/blue.png') }}">
                             </a>
                         </div>
                         <div class="col-6 collapse-close">
                             <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="{{ __('Toggle sidenav') }}">
                             </button>
                         </div>
                     </div>
                 </div>
                 <!-- Navbar items -->
                 <ul class="navbar-nav ml-auto">
                     @guest
                     <li class="nav-item">
                         <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                             <i class="ni ni-key-25"></i>
                             <span class="nav-link-inner--text">{{ __('Login') }}</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link nav-link-icon" href="{{ route('register') }}">
                             @if (Route::has('register'))
                                 <i class="ni ni-circle-08"></i>
                                 <span class="nav-link-inner--text">{{ __('register') }}</span>
                             @endif
                         </a>
                     </li>
                     @else
                         <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                             <div class="form-group mb-0">
                                 <div class="input-group input-group-alternative">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text"><i class="fas fa-search"></i></span>
                                     </div>
                                     <input class="form-control" placeholder="Search" type="text">
                                 </div>
                             </div>
                         </form>
                         <li class="nav-item dropdown">
                             <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                      <img alt="Image placeholder" src="{{ asset('img/theme/team-4-800x800.jpg') }}">
                                    </span>
                                     <div class="media-body ml-2 d-none d-lg-block">
                                         <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                                     </div>
                                 </div>
                             </a>
                             <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                 <div class=" dropdown-header noti-title">
                                     <h6 class="text-overflow m-0">Bem vindo!</h6>
                                 </div>
                                 <a href="#" class="dropdown-item">
                                     <i class="ni ni-single-02"></i>
                                     <span>Perfil</span>
                                 </a>
                                 <a href="#" class="dropdown-item">
                                     <i class="ni ni-settings-gear-65"></i>
                                     <span>Configurações</span>
                                 </a>
                                 <a href="#" class="dropdown-item">
                                     <i class="ni ni-calendar-grid-58"></i>
                                     <span>Atividade</span>
                                 </a>
                                 <a href="#" class="dropdown-item">
                                     <i class="ni ni-support-16"></i>
                                     <span>Suporte</span>
                                 </a>
                                 <div class="dropdown-divider"></div>
                                 <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                    class="dropdown-item">
                                     <i class="ni ni-user-run"></i>
                                     <span>{{ __('Sair') }}</span>
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                             </div>
                         </li>
                     @endguest
                 </ul>
             </div>
         </div>
     </nav>
     <div class="main-content">
        @yield('content')
     </div>
     <!-- Footer -->
     <footer class="py-5">
         <div class="container">
             <div class="row align-items-center justify-content-xl-between">
                 <div class="col-xl-6">
                     <div class="copyright text-center text-xl-left text-muted">
                         &copy; 2019 <a href="https://www.studiiomartins.com.br" class="font-weight-bold ml-1" target="_blank">Studio Martins</a>
                     </div>
                 </div>
                 {{--<div class="col-xl-6">--}}
                 {{--<ul class="nav nav-footer justify-content-center justify-content-xl-end">--}}
                 {{--<li class="nav-item">--}}
                 {{--<a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>--}}
                 {{--</li>--}}
                 {{--<li class="nav-item">--}}
                 {{--<a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>--}}
                 {{--</li>--}}
                 {{--<li class="nav-item">--}}
                 {{--<a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>--}}
                 {{--</li>--}}
                 {{--<li class="nav-item">--}}
                 {{--<a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>--}}
                 {{--</li>--}}
                 {{--</ul>--}}
                 {{--</div>--}}
             </div>
         </div>
     </footer>
</div>

<!-- Argon Scripts -->
<!-- Core -->
<script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- Optional JS -->
<script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
<!-- Argon JS -->
<script src="{{ asset('js/argon.js?v=1.0.0') }}"></script>
</body>
</html>