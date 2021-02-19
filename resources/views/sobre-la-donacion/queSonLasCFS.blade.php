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
        <svg class="no-view" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 849.55 877.3"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#b55e28;}.cls-3{fill:#961628;mix-blend-mode:multiply;}.cls-4{fill:#8e1827;}.cls-5{fill:#9d2830;}.cls-6{fill:#7a1926;}</style></defs><title>celula</title><g class="cls-1"><g id="Celula"><path class="cls-2" d="M700.42,857.33c-107,55.21-225.6-16.73-295.44-62.71S-62.58,529.85,8.46,251.07,286-24.18,387.13,26.62s118.25,85.47,172,296.58S811,479.52,844.77,593.66,723.39,845.48,700.42,857.33Z"/><path class="cls-3" d="M652.61,782.68c-80.26,52-131.63,34.89-254.89-43s-277-192.87-284.94-335.41,44.82-256.21,176-248.55,191,24.87,212.56,147.39,62,190.6,151.3,222.9S807.77,682.19,652.61,782.68Z"/><path class="cls-4" d="M558.29,720.76c-69,34.06-199.66-54.08-265.27-119.28S170.8,425,255.45,341.26,438.59,306.92,467.5,369,514.38,510.2,579.82,549.42,692.49,654.54,558.29,720.76Z"/><path class="cls-5" d="M475.5,585.94c-21.28,48.73-51.09,44.71-129.36-9s-83.88-159-4.92-170.28,53.71,46.71,85.14,82S494.78,541.8,475.5,585.94Z"/><path class="cls-6" d="M445.73,562.78c-13.23,29.2-72.07-4.35-93-16.21s-84-66.74-42.42-97.21,64.37,12.77,74.85,38.42C408.59,545.13,462.71,525.33,445.73,562.78Z"/></g></g></svg>
        <div id="center" class="row">
          <!-- Hoja 1 -->
          <div id="home-content-0" class="col home-content">
            <h1>Infórmate sobre la donación</h1>
            <h3>¿Qué son las Células Formadoras de la Sangre?</h3>
          </div>
          <!-- Hoja 2 -->
          <div id="home-content-1" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-6 mb-3">
                  <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-5 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/1.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>El sistema hematopoyético tiene como función generar nuevas células sanguíneas para reemplazar las que cumplen su ciclo de vida y retirarlas de circulación.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 3 -->
          <div id="home-content-2" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-6 mb-3">
                  <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-5 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/2.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Este sistema está constituido por un conjunto de células que viven al interior de los huesos (el tuétano) y que dan origen a todos los tipos de células sanguíneas.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 4 -->
          <div id="home-content-3" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-6 mb-3">
                  <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-5 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/3.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Estas células (conocidas como células progenitoras hematopoyéticas) tienen la capacidad de transformarse en plaquetas, glóbulos rojos o glóbulos blancos.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 5 -->
          <div id="home-content-4" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-6 mb-3">
                  <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-5 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/4.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Algunas personas sufren de enfermedades que se originan en estas células. Esto hace que las plaquetas y los glóbulos que se forman no funcionen bien, poniendo en peligro su vida.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 6 -->
          <div id="home-content-5" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-6 mb-3">
                  <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-5 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/5.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Una persona sana puede dar sus Células Formadoras de la Sangre a otra que tenga las suyas defectuosas por alguna enfermedad, siempre y cuando ambas sean compatibles.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 7 -->
          <div id="home-content-6" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-6 mb-3">
                  <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-5 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/6.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>El sistema inmunitario del cuerpo diferencia entre las propias células y células o agentes extraños o dañinos mediante un conjunto de proteínas que lo permite (Antigenos Leucocitarios Humanos - HLA en inglés).</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 8 -->
          <div id="home-content-7" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-6 mb-3">
                  <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-5 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/7.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Para que el trasplante de Células Formadoras de la Sangre sea exitoso, tanto el donante como el receptor deben ser compatibles, es decir, deben tener un HLA idéntico.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Footer -->
          <div id="home-content-8" class="col home-content no-view">
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
                  <a class="leer_siguiente" href="{!! route('comoPuedesDarCelulas') !!}">
                    ¿Cómo puedes DarCélulas? <span><i class="fas fa-caret-right"></i></span>
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
          <h3>¿Qué son las Células Formadoras de la Sangre?</h3>
        </div>
      </div>

      <!-- Hoja 2 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/1.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>El sistema hematopoyético tiene como función generar nuevas células sanguíneas para reemplazar las que cumplen su ciclo de vida y retirarlas de circulación.</p>
        </div>
      </div>

      <!-- Hoja 3 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/2.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Este sistema está constituido por un conjunto de células que viven al interior de los huesos (el tuétano) y que dan origen a todos los tipos de células sanguíneas.</p>
        </div>
      </div>

      <!-- Hoja 4 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/3.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Estas células (conocidas como células progenitoras hematopoyéticas) tienen la capacidad de transformarse en plaquetas, glóbulos rojos o glóbulos blancos.</p>
        </div>
      </div>

      <!-- Hoja 5 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/4.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Algunas personas sufren de enfermedades que se originan en estas células. Esto hace que las plaquetas y los glóbulos que se forman no funcionen bien, poniendo en peligro su vida.</p>
        </div>
      </div>

      <!-- Hoja 6 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/5.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Una persona sana puede dar sus Células Formadoras de la Sangre a otra que tenga las suyas defectuosas por alguna enfermedad, siempre y cuando ambas sean compatibles.</p>
        </div>
      </div>

      <!-- Hoja 7 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/6.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>El sistema inmunitario del cuerpo diferencia entre las propias células y células o agentes extraños o dañinos mediante un conjunto de proteínas que lo permite (Antigenos Leucocitarios Humanos - HLA en inglés).</p>
        </div>
      </div>

      <!-- Hoja 8 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Qué son las Células Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/que_son_CFS/7.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Para que el trasplante de Células Formadoras de la Sangre sea exitoso, tanto el donante como el receptor deben ser compatibles, es decir, deben tener un HLA idéntico.</p>
        </div>
      </div>

      <div id="footer_m" class="row align-items-center total_m text-center">
        <div class="col-12">
          <a href="{!! route('inicio') !!}">
            <picture class="logo_darcelulas">
              <img class="img-fluid" src="{!! asset('img/logo_darcelulas_blanco_w.png') !!}" alt="">
            </picture>
          </a>
          <a class="leer_siguiente" href="{!! route('comoPuedesDarCelulas') !!}">
            ¿Cómo puedes DarCélulas?
          </a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection

@section('js')
  <script src="{!! asset('js/queSonLasCFS.js') !!}"></script>
@endsection
