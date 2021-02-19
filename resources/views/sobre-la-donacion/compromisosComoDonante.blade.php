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
            <h1>Infórmate sobre la donación</h1>
            <h3>¿A qué te comprometes como donante?</h3>
          </div>
          <!-- Hoja 2 -->
          <div id="home-content-1" class="col home-content no-view">
            <div class="h100 align-items-center">
              <div class="row align-items-center">
                <div class="col-7">
                  <h2 class="mb-3">¿A qué te comprometes como donante?</h2>
                  <p>Recuerda que de tu compromiso depende la oportunidad de vida de alguien más. Desde el momento que se identifica un donante compatible se genera una expectativa para el receptor. Una vez te contactemos, reafirmes tu compromiso y se elija el método de donación, el receptor también se estará preparando para recibir tus células.</p>
                  <p>Teniendo en cuenta que puedes ser contactado en cualquier momento, debes mantener un estilo de vida saludable y actualizar periódicamente tus datos de contacto (número telefónico, correo electrónico y dirección).</p>
                </div>
                <div class="col-4 offset-1 text-center">
                  <ul class="lista_compromisos_como_donante">
                    <li>
                      <img class="img-responsive" src="{!! asset('img/compromisos/1.png') !!}" alt="">
                      <p>Mantener tu intención de DarCélulas</p>
                    </li>
                    <li>
                      <img class="img-responsive" src="{!! asset('img/compromisos/2.png') !!}" alt="">
                      <p>Mantener un estilo de vida saludable</p>
                    </li>
                    <li>
                      <img class="img-responsive" src="{!! asset('img/compromisos/3.png') !!}" alt="">
                      <p>Actualizar periódicamente tus datos de contacto</p>
                    </li>
                  </ul>
                </div>
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
                  <a class="leer_siguiente" href="{!! route('quieroInscribirme') !!}">
                    ¡Quiero preinscribirme! <span><i class="fas fa-caret-right"></i></span>
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
          <h1>Infórmate sobre la donación</h1>
          <h3>¿A qué te comprometes como donante?</h3>
        </div>
      </div>

      <!-- Hoja 2 -->
      <div id="fondo_general_m" class="row align-items-center">
        <div class="col-12 text-center pt-3">
          <h2 class="mb-3">¿A qué te comprometes como donante?</h2>
          <p>Recuerda que de tu compromiso depende la oportunidad de vida de alguien más. Desde el momento que se identifica un donante compatible se genera una expectativa para el receptor. Una vez te contactemos, reafirmes tu compromiso y se elija el método de donación, el receptor también se estará preparando para recibir tus células.</p>
          <p>Teniendo en cuenta que puedes ser contactado en cualquier momento, debes mantener un estilo de vida saludable y actualizar periódicamente tus datos de contacto (número telefónico, correo electrónico y dirección).</p>
        </div>
        <div class="col-12 pb-3">
          <ul class="lista-objetivos">
            <li>
              <img class="img-responsive" src="{!! asset('img/compromisos/1.png') !!}" alt="">
              <p>Mantener tu intención de DarCélulas</p>
            </li>
            <li>
              <img class="img-responsive" src="{!! asset('img/compromisos/2.png') !!}" alt="">
              <p>Mantener un estilo de vida saludable</p>
            </li>
            <li>
              <img class="img-responsive" src="{!! asset('img/compromisos/3.png') !!}" alt="">
              <p>Actualizar periódicamente tus datos de contacto</p>
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
          <a class="leer_siguiente" href="{!! route('quieroInscribirme') !!}">
            ¡Quiero preinscribirme!
          </a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection

@section('js')
  <script src="{!! asset('js/compromisosComoDonante.js') !!}"></script>
@endsection
