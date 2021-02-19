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
            <h1>Conoce el registro</h1>
            <h3>Objetivos</h3>
          </div>
          <!-- Hoja 2 -->
          <div id="home-content-1" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row">
                <div class="col-12">
                  <h2 class="mb-5">Objetivos</h2>
                </div>
                <div class="col-12">
                  <ul class="lista-objetivos">
                    <li>
                      <img class="img-fluid" src="{!! asset('img/objetivos/1.png') !!}" alt="">
                      <p>Buscamos donantes de Células Formadoras de la Sangre que sean inmunológicamente compatibles para los pacientes que requieran de un trasplante para salvar su vida.</p>
                    </li>
                    <li>
                      <img class="img-fluid" src="{!! asset('img/objetivos/2.png') !!}" alt="">
                      <p>Gestionamos y coordinamos el proceso de donación de Células Formadoras de la Sangre, desde la selección del donante compatible, hasta el seguimiento post donación.</p>
                    </li>
                    <li>
                      <img class="img-fluid" src="{!! asset('img/objetivos/3.png') !!}" alt="">
                      <p>Realizamos acciones para fomentar la inscripción de potenciales donantes en el registro colombiano.</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 3 -->
          <div id="home-content-2" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row">
                <div class="col-12">
                  <h2 class="mb-5">Objetivos</h2>
                </div>
                <div class="col-4 offset-2">
                  <img class="img-fluid" src="{!! asset('img/objetivos/4.png') !!}" alt="">
                  <p>Promovemos la educación, investigación y formación acerca de la importancia de la donación de Células Formadoras de la Sangre.</p>
                </div>
                <div class="col-4">
                  <img class="img-fluid" src="{!! asset('img/objetivos/5.png') !!}" alt="">
                  <p>Integramos el registro colombiano con otros en el mundo para aumentar la posibilidad de encontrar un donante.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Footer -->
          <div id="home-content-3" class="col home-content no-view">
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
          <h3>Objetivos</h3>
        </div>
      </div>

      <div id="fondo_general_m" class="row align-items-center text-center">
        <div class="col-12 py-5">
          <ul class="lista-objetivos">
            <li>
              <img class="img-fluid" src="{!! asset('img/objetivos/1.png') !!}" alt="">
              <p>Buscamos donantes de Células Formadoras de la Sangre que sean genéticamente compatibles para los pacientes que requieran de un trasplante para salvar su vida.</p>
            </li>
            <li>
              <img class="img-fluid" src="{!! asset('img/objetivos/2.png') !!}" alt="">
              <p>Gestionamos y coordinamos el proceso de donación de Células Formadoras de la Sangre, desde la selección del donante compatible, hasta el seguimiento post donación.</p>
            </li>
            <li>
              <img class="img-fluid" src="{!! asset('img/objetivos/3.png') !!}" alt="">
              <p>Realizamos acciones para fomentar la inscripción de potenciales donantes en el registro colombiano.</p>
            </li>
            <li>
              <img class="img-fluid" src="{!! asset('img/objetivos/4.png') !!}" alt="">
              <p>Promovemos la educación, investigación y formación acerca de la importancia de la donación de Células Formadoras de la Sangre.</p>
            </li>
            <li>
              <img class="img-fluid" src="{!! asset('img/objetivos/5.png') !!}" alt="">
              <p>Integramos el registro colombiano con otros en el mundo para aumentar la posibilidad de encontrar un donante.</p>
            </li>
          </ul>
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
  <script src="{!! asset('js/objetivos.js') !!}"></script>
@endsection
