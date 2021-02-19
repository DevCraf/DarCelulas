@extends('layouts.main')

@section('styles')
@endsection

@section('content')
<!-- DESKTOP -->
<div class="d-none d-lg-block col-12">
  <!-- Fondo -->
  <div id="img_back" data-id="0" class="row pagina fondo_home">
    <!-- body -->
    <div class="col">
      <!-- Menú -->
      @include('includes.logos')
      <!-- Contenido -->
      <div class="container">
        <!-- Celula -->
        <div id="center" class="row">
          <!-- Hoja 1 -->
          <div id="home-content-0" class="col home-content">
            <h1>Recursos educativos</h1>

          </div>
          <!-- Hoja 2 -->
          <div id="home-content-1" class="col home-content no-view">
            <div class="row">
              <div class="col-12">
                <ul class="lista-noticias">
                  <li>
                    <a href="{!! route('globuloRojo') !!}">
                      <img class="img-fluid mb-2" src="{!! asset('img/recursos_educativos/globulo-rojo-thumb.jpg') !!}" alt="">
                    </a>
                    <p>¿Qué es un glóbulo rojo?</p>
                    <a class="btn_general" href="{!! route('globuloRojo') !!}">Leer más</a>
                  </li>
                  <li>
                    <a href="{!! route('globuloBlanco') !!}">
                      <img class="img-fluid mb-2" src="{!! asset('img/recursos_educativos/globulo-blanco-thumb.jpg') !!}" alt="">
                    </a>
                    <p>¿Qué es un glóbulo blanco?</p>
                    <a class="btn_general" href="{!! route('globuloBlanco') !!}">Leer más</a>
                  </li>
                  <li>
                    <a href="{!! route('plaqueta') !!}">
                      <img class="img-fluid mb-2" src="{!! asset('img/recursos_educativos/plaqueta-thumb.jpg') !!}" alt="">
                    </a>
                    <p>¿Qué es una plaqueta?</p>
                    <a class="btn_general" href="{!! route('plaqueta') !!}">Leer más</a>
                  </li>
                </ul>
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
                  <a class="leer_siguiente" href="{!! route('noticias') !!}">
                    Artículos <span><i class="fas fa-caret-right"></i></span>
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
          <h1>Recursos educativos</h1>
        </div>
      </div>

      <!-- Hoja 2 -->
      <div id="fondo_general_m" class="row align-items-center">
        <div class="col-12 text-left py-3">
          <ul class="lista-noticias">
            <li>
              <div class="lista-noticias-img">
                <a href="{!! route('globuloRojo') !!}">
                  <img class="img-fluid mb-2" src="{!! asset('img/recursos_educativos/globulo-rojo-thumb.jpg') !!}" alt="">
                </a>
              </div>
              <div class="lista-noticias-txt">
                <p>¿Qué es un glóbulo rojo?</p>
                <a class="btn_general" href="{!! route('globuloRojo') !!}">Leer más</a>
              </div>
            </li>
            <li>
              <div class="lista-noticias-img">
                <a href="{!! route('globuloBlanco') !!}">
                  <img class="img-fluid mb-2" src="{!! asset('img/recursos_educativos/globulo-blanco-thumb.jpg') !!}" alt="">
                </a>
              </div>
              <div class="lista-noticias-txt">
                <p>¿Qué es un glóbulo blanco?</p>
                <a class="btn_general" href="{!! route('globuloBlanco') !!}">Leer más</a>
              </div>
            </li>
            <li>
              <div class="lista-noticias-img">
                <a href="{!! route('plaqueta') !!}">
                  <img class="img-fluid mb-2" src="{!! asset('img/recursos_educativos/plaqueta-thumb.jpg') !!}" alt="">
                </a>
              </div>
              <div class="lista-noticias-txt">
                <p>¿Qué es una plaqueta?</p>
                <a class="btn_general" href="{!! route('plaqueta') !!}">Leer más</a>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- Footer -->
      <div id="footer_m" class="row align-items-center total_m text-center">
        <div class="col-12">
          <a href="{!! route('inicio') !!}">
            <picture class="logo_darcelulas">
              <img class="img-fluid" src="{!! asset('img/logo_darcelulas_blanco_w.png') !!}" alt="">
            </picture>
          </a>
          <a class="leer_siguiente" href="{!! route('noticias') !!}">
            Artículos
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
