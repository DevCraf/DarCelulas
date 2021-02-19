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

            <h3>¿Qué pasa al DarCélulas Formadoras de la Sangre?</h3>

          </div>

          <!-- Hoja 2 -->

          <div id="home-content-1" class="col home-content no-view">

            <div class="h100 align-items-center">

              <div class="row">

                <div class="col-12 mb-3">

                  <h2>¿Qué efectos puedes experimentar al donar células formadoras de la sangre?</h2>

                </div>

                <div class="col-6 d-flex align-items-center">

                  <p>Gracias a tu ayuda alguien recibió una nueva oportunidad de vida. Recuerda que tus células van a regenerarse rápidamente después de la donación, por lo que podrás dar células de nuevo en un año, si alguien lo necesita.</p>

                </div>

                <div class="col-6">

                  <img class="img-fluid" src="{!! asset('img/que_pasa_despues/1.png') !!}" alt="">

                </div>

              </div>

            </div>

          </div>

          <!-- Hoja 3 -->

          <div id="home-content-2" class="col home-content no-view">

            <div class="h100 align-items-center">

              <div class="row">

                <div class="col-12 mb-3">

                  <h2>¿Qué pasa al DarCélulas Formadoras de la Sangre?</h2>

                </div>

                <div class="col-6 d-flex align-items-center">

                  <p>Cuando donas células por sangre, las inyecciones preparatorias pueden producir un malestar similar al de una gripa fuerte, que incluye dolor en los huesos. Esto puede manejarse con analgésicos.</p>

                </div>

                <div class="col-6">

                  <img class="img-fluid" src="{!! asset('img/que_pasa_despues/2.png') !!}" alt="">

                </div>

              </div>

            </div>

          </div>

          <!-- Hoja 4 -->

          <div id="home-content-3" class="col home-content no-view">

            <div class="h100 align-items-center">

              <div class="row">

                <div class="col-12 mb-3">

                  <h2>¿Qué pasa al DarCélulas Formadoras de la Sangre?</h2>

                </div>

                <div class="col-6 d-flex align-items-center">

                  <p>Después de DarCélulas puedes experimentar síntomas similares a la donación por aféresis: la frecuencia de tu respiración puede aumentar, es posible sentir algo de escalofrío y debilidad. Estos síntomas son temporales, además el personal que toma tus células estará ahí para ayudarte. Este procedimiento es ambulatorio.</p>

                </div>

                <div class="col-6">

                  <img class="img-fluid" src="{!! asset('img/que_pasa_despues/3.png') !!}" alt="">

                </div>

              </div>

            </div>

          </div>

          <!-- Hoja 5 -->

          <div id="home-content-4" class="col home-content no-view">

            <div class="h100 align-items-center">

              <div class="row">

                <div class="col-12 mb-3">

                  <h2>¿Qué pasa al DarCélulas Formadoras de la Sangre?</h2>

                </div>

                <div class="col-6 d-flex align-items-center">

                  <p>En caso de haber donado células mediante el método de punción del hueso de la cadera, vas a requerir anestesia. Una vez terminada la donación puedes sentir un dolor, que sería manejado con analgésicos, por esto es necesario que te quedes un día en el hospital. Recuerda que siempre estarás bajo el cuidado de personal altamente calificado.</p>

                </div>

                <div class="col-6">

                  <img class="img-fluid" src="{!! asset('img/que_pasa_despues/4.png') !!}" alt="">

                </div>

              </div>

            </div>

          </div>

          <!-- Footer -->

          <div id="home-content-5" class="col home-content no-view">

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

                  <a class="leer_siguiente" href="{!! route('compromisosComoDonante') !!}">

                    ¿A qué te comprometes como donante? <span><i class="fas fa-caret-right"></i></span>

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

          <h3>¿Qué pasa al DarCélulas Formadoras de la Sangre?</h3>

        </div>

      </div>



      <!-- Hoja 2 -->

      <div id="fondo_general_m" class="row align-items-center total_m text-center">

        <div class="col-12 mb-3">

          <h2>¿Qué pasa al DarCélulas Formadoras de la Sangre?</h2>

        </div>

        <div class="col-10 offset-1 mb-3">

          <img class="img-fluid" src="{!! asset('img/que_pasa_despues/1.png') !!}" alt="">

        </div>

        <div class="col-12">

          <p>Gracias a tu ayuda alguien recibió una nueva oportunidad de vida. Recuerda que tus células van a regenerarse rápidamente después de la donación, por lo que podrás dar células de nuevo en un año, si alguien lo necesita.</p>

        </div>

      </div>



      <!-- Hoja 3 -->

      <div id="fondo_general_m" class="row align-items-center total_m text-center">

        <div class="col-12 mb-3">

          <h2>¿Qué pasa al DarCélulas Formadoras de la Sangre?</h2>

        </div>

        <div class="col-10 offset-1 mb-3">

          <img class="img-fluid" src="{!! asset('img/que_pasa_despues/2.png') !!}" alt="">

        </div>

        <div class="col-12">

          <p>Cuando donas células por sangre, las inyecciones preparatorias pueden producir un malestar similar al de una gripa fuerte, que incluye dolor en los huesos. Esto puede manejarse con analgésicos.</p>

        </div>

      </div>



      <!-- Hoja 4 -->

      <div id="fondo_general_m" class="row align-items-center total_m text-center">

        <div class="col-12 mb-3">

          <h2>¿Qué pasa al DarCélulas Formadoras de la Sangre?</h2>

        </div>

        <div class="col-10 offset-1 mb-3">

          <img class="img-fluid" src="{!! asset('img/que_pasa_despues/3.png') !!}" alt="">

        </div>

        <div class="col-12">

          <p>Después de DarCélulas puedes experimentar síntomas similares a la donación por aféresis: la frecuencia de tu respiración puede aumentar, es posible sentir algo de escalofrío y debilidad. Estos síntomas son temporales, además el personal que toma tus células estará ahí para ayudarte. Este procedimiento es ambulatorio.</p>

        </div>

      </div>



      <!-- Hoja 5 -->

      <div id="fondo_general_m" class="row align-items-center total_m text-center">

        <div class="col-12 mb-3">

          <h2>¿Qué pasa al DarCélulas Formadoras de la Sangre?</h2>

        </div>

        <div class="col-10 offset-1 mb-3">

          <img class="img-fluid" src="{!! asset('img/que_pasa_despues/4.png') !!}" alt="">

        </div>

        <div class="col-12">

          <p>En caso de haber donado células por la cadera, vas a requerir anestesia. Una vez terminada la donación puedes sentir un dolor similar al de un golpe, que puede ser manejado con analgésicos, por esto es necesario que te quedes un día en el hospital. Recuerda que siempre estarás bajo el cuidado de personal altamente calificado.</p>

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

          <a class="leer_siguiente" href="{!! route('compromisosComoDonante') !!}">

            ¿A qué te comprometes como donante? <span><i class="fas fa-caret-right"></i></span>

          </a>

        </div>

      </div>



    </div>

  </div>

</div>



@endsection



@section('js')

  <script src="{!! asset('js/quePasaDespuesDarCelulas.js') !!}"></script>

@endsection

