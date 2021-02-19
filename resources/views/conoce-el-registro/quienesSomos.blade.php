@extends('layouts.main')

@section('styles')
@endsection

@section('content')
<!-- DESKTOP -->
<div class="d-none d-lg-block col-12">
<!-- Fondo -->
  <div id="img_back" data-id="0" class="row pagina fondo_home">
    <!-- body -->
    <div class="col-12">
      <!-- Menú -->
      @include('includes.logos')
      <!-- Contenido -->
      <div class="container">
        <!-- Celula -->
        <div id="center" class="row">
          <!-- Hoja 1 -->
          <div id="home-content-0" class="col home-content">
            <h1>Conoce el registro</h1>
            <h3>¿Quiénes somos?</h3>
          </div>
          <!-- Hoja 2 -->
          <div id="home-content-1" class="col home-content no-view">
            <div class="row h100 align-items-center">
              <div class="col-5">
                <img class="img-fluid" src="{!! asset('img/conoce_el_registro/idcbis.png') !!}" alt="">
              </div>
              <div class="col-7">
                <h2 class="mb-4">¿Quiénes somos?</h2>
                <p>El Instituto Distrital de Ciencia, Biotecnología e Innovación en Salud (IDCBIS), es una entidad de carácter mixto, en pro de la salud individual y colectiva, sin ánimo de lucro, vinculada a la Secretaría Distrital de Salud.</p>
                <p>El programa DarCélulas se realiza en el marco del proyecto de establecimiento y organización de un Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas en Colombia - BPIN2015000100054, desarrollado por el IDCBIS y financiado con recursos del Fondo de Ciencia, Tecnología e Innovación del Sistema General de Regalías y de la administración distrital de Bogotá.</p>
              </div>
            </div>
          </div>
          <!-- Footer -->
          <div id="home-content-2" class="col home-content no-view">
            <div class="h100 align-items-center justify-content-center">
              <div class="row align-items-center">
                <div class="col-12 text-center">
                  <a href="{!! route('inicio') !!}">
                    <picture class="logo_darcelulas_footer">
                      <img class="img-fluid" src="{!! asset('img/logo_darcelulas_blanco_w.png') !!}" alt="">
                    </picture>
                  </a>
                </div>
                <div class="col-12 text-center mt-5">
                  <a class="leer_siguiente" href="{!! route('queSonLasCFS') !!}">
                    ¿Qué son las Células Formadoras de la Sangre? <span><i class="fas fa-caret-right"></i></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <i id="nrow_left" class="fas fa-angle-left"></i>
          <i id="nrow_right" class="fas fa-angle-right"></i>
        </div>
      </div>
      <!-- Bottom -->
      @include('includes.bottom')
    </div>
    <!-- Contenido para animaciones -->
    <div class="animation-content"></div>
  </div> <!-- row fondo -->
</div>
<!-- MOVIL -->
<div class="col-12 d-block d-lg-none">
  <div class="row">
    <!-- body movil -->
    <div class="col-12">

      <div id="uno_home_m" class="row align-items-center total_m text-center">
        <div class="col-12">
          <h1>Conoce el registro</h1>
          <h3>¿Quiénes somos?</h3>
        </div>
      </div>

      <div id="fondo_general_m" class="row align-items-center text-center">
        <div class="col-12">
          <img class="img-fluid" src="{!! asset('img/conoce_el_registro/idcbis.png') !!}" alt="">
        </div>
        <div class="col-12">
          <h2 class="mb-4">¿Quiénes somos?</h2>
          <p>El Instituto Distrital de Ciencia, Biotecnología e Innovación en Salud (IDCBIS), es una entidad de carácter mixto, en pro de la salud individual y colectiva, sin ánimo de lucro, vinculada a la Secretaría Distrital de Salud.</p>
          <p>El programa DarCélulas se realiza en el marco del proyecto de establecimiento y organización de un Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas en Colombia - BPIN2015000100054, desarrollado por el IDCBIS y financiado con recursos del Fondo de Ciencia, Tecnología e Innovación del Sistema General de Regalías y de la administración distrital de Bogotá.</p>
        </div>
      </div>

      <div id="footer_m" class="row align-items-center total_m text-center">
        <div class="col-12">
          <a href="{!! route('inicio') !!}">
            <picture class="logo_darcelulas">
              <img class="img-fluid" src="{!! asset('img/logo_darcelulas_blanco_w.png') !!}" alt="">
            </picture>
          </a>
          <a class="leer_siguiente" href="{!! route('queSonLasCFS') !!}">
            ¿Qué son las Células Formadoras de la Sangre?
          </a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection

@section('js')
  <script src="{!! asset('js/quienesSomos.js') !!}"></script>
@endsection
