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
        <div id="center" class="row">
          <!-- Hoja 1 -->
          <div id="home-content-0" class="col home-content">
            <h1>Infórmate sobre la donación</h1>
            <h3>¿Cómo puedes DarCélulas?</h3>
          </div>
          <!-- Hoja 2 -->
          <div id="home-content-1" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-7 mb-3">
                  <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-6 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/1.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Lee los requisitos y <a class="enlace_interno" href="{!! route('compromisosComoDonante') !!}">a qué te comprometes</a> como donante.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 3 -->
          <div id="home-content-2" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-7 mb-3">
                  <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-6 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/2.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Diligencia el formulario de pre-inscripción y agenda tu cita para formalizar tu inscripción de manera presencial.</p>
                  <a class="btn_general" href="{!! route('quieroInscribirme') !!}">Formulario</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 4 -->
          <div id="home-content-3" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-7 mb-3">
                  <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-6 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/3.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Acércate a las instalaciones del IDCBIS en la Secretaría Distrital de Salud.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 5 -->
          <div id="home-content-4" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-7 mb-3">
                  <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-6 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/4.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Tras verificar si cumples los requisitos podrás resolver inquietudes y firmar el consentimiento informado.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 6 -->
          <div id="home-content-5" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-7 mb-3">
                  <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-6 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/5.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Tomaremos muestras de tu sangre para conocer tus datos HLA.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 7 -->
          <div id="home-content-6" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-7 mb-3">
                  <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-6 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/6.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Tus datos HLA serán ingresados a la base de datos del registro.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 8 -->
          <div id="home-content-7" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-7 mb-3">
                  <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-6 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/7.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Una vez consolidado el Registro, si una persona con un HLA es compatible contigo y necesita de tu donación te contactaremos.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 9 -->
          <div id="home-content-8" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-7 mb-3">
                  <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-6 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/8.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>A través de una consulta médica, se analizará si tu estado de salud es bueno y la donación es segura para ti y el paciente. Además se te informará el método por el cual podrás llevar a cabo tu donación.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 10 -->
          <div id="home-content-9" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-7 mb-3">
                  <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-6 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/9.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Hay dos formas de dar tus células:</p>
                  <ol class="txt-blue">
                    <li>Tomarlas de la sangre (la forma más frecuente).</li>
                    <li>Tomarlas directamente del hueso de la cadera (el tuétano).  </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 11 -->
          <div id="home-content-10" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-7 mb-3">
                  <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-6 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/10.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Si decides dar tus células por la sangre, durante cinco días recibirás una inyección preparatoria que provoca que las células formadoras que están en los huesos salgan hacia las venas. Así, se pueden recoger fácilmente.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 12 -->
          <div id="home-content-11" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-7 mb-3">
                  <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-6 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/11.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Tus células serán transportadas hasta el lugar donde se hará el trasplante.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Hoja 13 -->
          <div id="home-content-12" class="col home-content no-view text-center">
            <div class="h100 align-items-center">
              <div class="row justify-content-center">
                <div class="col-7 mb-3">
                  <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-6 mb-3">
                  <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/12.png') !!}" alt="">
                </div>
                <div class="w-100"></div>
                <div class="col-6">
                  <p>Tu donación es recibida por la persona que lo necesita.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Footer -->
          <div id="home-content-13" class="col home-content no-view">
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
                  <a class="leer_siguiente" href="{!! route('quePasaDespuesDarCelulas') !!}">
                    ¿Qué pasa al DarCélulas? <span><i class="fas fa-caret-right"></i></span>
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
          <h3>¿Cómo puedes DarCélulas?</h3>
        </div>
      </div>

      <!-- Hoja 2 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/1.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Lee los requisitos y <a class="enlace_interno" href="{!! route('compromisosComoDonante') !!}">a qué te comprometes</a> como donante.</p>
        </div>
      </div>

      <!-- Hoja 3 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/2.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Diligencia el formulario de pre-inscripción:</p>
          <a class="enlace_interno" href="{!! route('quieroInscribirme') !!}">Formulario</a>
        </div>
      </div>

      <!-- Hoja 4 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/3.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Acércate al Banco Distrital de Sangre - IDCBIS y recibe más información.</p>
        </div>
      </div>

      <!-- Hoja 5 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/4.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Si cumples con los requisitos pediremos tu aprobación para hacer parte del registro. </p>
        </div>
      </div>

      <!-- Hoja 6 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/5.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Tomaremos muestras de tu sangre para conocer tus datos HLA.</p>
        </div>
      </div>

      <!-- Hoja 7 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/6.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Tus datos HLA serán ingresados a la base de datos del registro.</p>
        </div>
      </div>

      <!-- Hoja 8 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/7.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Una vez consolidado el Registro, si una persona con un HLA es compatible contigo y necesita de tu donación te contactaremos.</p>
        </div>
      </div>

      <!-- Hoja 9 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/8.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Analizan si tu estado de salud es bueno y te informan qué debes hacer para donar tus células.</p>
        </div>
      </div>

      <!-- Hoja 10 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/9.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Hay dos formas de dar tus células:</p>
          <ul class="txt-blue">
            <li>Tomarlas de la sangre (la forma más frecuente).</li>
            <li>Tomarlas directamente del hueso de la cadera (el tuétano).  </li>
          </ul>
        </div>
      </div>

      <!-- Hoja 11 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/10.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Si decides dar tus células por la sangre, durante cinco días recibirás una inyección preparatoria que provoca que las células formadoras que están en los huesos salgan hacia las venas. Así, se pueden recoger fácilmente.</p>
        </div>
      </div>

      <!-- Hoja 12 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/11.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Tus células serán transportadas hasta el lugar donde se hará el trasplante.</p>
        </div>
      </div>

      <!-- Hoja 13 -->
      <div id="fondo_general_m" class="row align-items-center total_m text-center">
        <div class="col-12 mb-3">
          <h2>¿Cómo puedes DarCélulas Formadoras de la Sangre?</h2>
        </div>
        <div class="col-10 offset-1 mb-3">
          <img class="img-fluid special-screen" src="{!! asset('img/como_puedo_DC/12.png') !!}" alt="">
        </div>
        <div class="col-12">
          <p>Tu donación es recibida por la persona que lo necesita.</p>
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
          <a class="leer_siguiente" href="{!! route('quePasaDespuesDarCelulas') !!}">
            ¿Qué pasa al DarCélulas?
          </a>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection

@section('js')
  <script src="{!! asset('js/comoPuedesDarCelulas.js') !!}"></script>
@endsection
