<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- Styles -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/styles_back.css">
  @yield('css')
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <!-- {{ config('app.name', 'Laravel') }} -->
          <img class="img-fluid" src="{!! asset('img/logo_pk.png') !!}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <!-- <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a> -->
                <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Cerrar sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
            </ul>
          
          <!-- Left Side Of Navbar -->
          <!-- <ul class="navbar-nav mr-auto">
            
          </ul> -->
          
          <!-- <ul class="navbar-nav ml-auto">
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
            </li>
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Cerrar sesión
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul> -->
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-3 py-4">
        <aside>
          <div class="card">
            <div class="card-header">
              Menú
            </div>
            <div class="list-group">
              <a class="list-group-item list-group-item-action" href="{!! route('home') !!}"><i class="fas fa-chart-bar mr-2"></i></i>Inicio</a>
              <a class="list-group-item list-group-item-action" href="{!! route('checkProteccion') !!}"><i class="fas fa-plus mr-2"></i>Agregar donante</a>
              <a class="list-group-item list-group-item-action" href="{!! route('getDonorState') !!}"><i class="fas fa-check mr-2"></i>Ver estado del donante</a>
              <a class="list-group-item list-group-item-action" href="{!! route('agendaInscripciones') !!}"><i class="far fa-calendar-alt mr-2"></i>Agenda de inscripciones</a>
              <a class="list-group-item list-group-item-action" href="{!! route('noAgendados') !!}"><i class="far fa-angry mr-2"></i>No agendados</a>
            </div>
          </div>
        </aside>
      </div>
      <div class="col-9 py-4">
        <main>
          @yield('content')
        </main>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

@yield('js')
</body>
</html>
