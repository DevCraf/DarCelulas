@extends('layouts.main')

@section('styles')
  <link rel="stylesheet" href="{!! asset('css/home.css') !!}">
@endsection

@section('content')
<!-- DESKTOP -->
<div class="d-none d-lg-block col-12">
  <!-- Fondo -->
  <div id="img_back" data-id="0" class="row pagina fondo_uno">
    <!-- body -->
    <div class="col-12">
      <!-- Menú -->
      <div class="container-fluid">
        <div id="top_1" class="row align-items-center justify-content-between">
          <div class="col-3">
            <a href="https://idcbis.org.co/" target="_blank">
              <picture class="logo_top_idcbis">
                <img class="img-fluid" src="img/logo_idcbis.png" alt="">
              </picture>
            </a>
            <a href="{!! route('inicio') !!}">
              <picture class="logo_top_darcelulas_blanco">
                <img class="img-fluid" src="img/logo_darcelulas_blanco.png" alt="">
              </picture>
            </a>
            <a href="{!! route('inicio') !!}">
              <picture class="logo_top_darcelulas_azul">
                <img class="img-fluid" src="img/logo_darcelulas.png" alt="">
              </picture>
            </a>
          </div>
        </div>
        <div id="top_2" class="row align-items-center justify-content-center">
          <div class="container">
            <div class="row">
              <div class="col text-right">

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Contenido -->
      <div class="container">
        <div id="center" class="row">
          <!-- Hoja 1 -->
          <div id="home-content-0" class="col-12 home-content">
            <a href="{!! route('inicio') !!}">
              <picture class="logo_darcelulas">
                <img class="img-fluid" src="{!! asset('img/logo_darcelulas_blanco_w.png') !!}" alt="">
              </picture>
            </a>
            <h1>
              Registro Nacional de Donantes de<br />
              <div class="wrap">
                <span class="CPH">Células Progenitoras Hematopoyéticas</span>
                <span class="CFS">Células Formadoras de la Sangre</span>
              </div>
            </h1>
          </div>
          <!-- Hoja 2 -->
          <div id="home-content-1" class="col-12 home-content no-view text-center">
            <h2>¿Qué es DarCélulas?</h2>
            <p class="importante-1">DarCélulas es el programa de donación del Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas en Colombia. Los registros en el mundo se encargan de coordinar la búsqueda de donantes anónimos y voluntarios para dar sus Células Formadoras de la Sangre a pacientes con enfermedades hematológicas graves que requieren un trasplante para salvar su vida.</p>
          </div>
          <!-- Hoja 3 -->
          <div id="home-content-2" class="col-7 offset-5 home-content no-view text-right">
            <h2>¿Por qué DarCélulas en Colombia?</h2>
            <p class="importante-1">En Colombia, <b>la leucemia es la principal causa de muerte en niños de 5 a 14 años.</b> Para muchas personas con ésta y otras enfermedades severas de la sangre, <b>un trasplante de Células Formadoras de la Sangre</b> obtenidas de un donante familiar <b>es la única posibilidad de vida.</b> Sin embargo, tan solo <b>3 de cada 10 pacientes encuentran un familiar compatible.</b> Los demás deben buscar un donante anónimo y voluntario que sea compatible a través de un registro.</p>
          </div>
          <!-- Hoja 4 -->
          <div id="home-content-3" class="col-7 home-content no-view text-left">
            <h2>¿Para quiénes se donan células?</h2>
            <div class="importante-1">
              <p>Los niños o adultos con las siguientes condiciones pueden necesitar un trasplante de Células Formadoras de la Sangre:</p>
              <ul>
                <li>Leucemias (la razón más frecuente)</li>
                <li>Anemia aplásica severa</li>
                <li>Hemoglobinopatías</li>
                <li>Otras alteraciones del sistema hematopoyético</li>
              </ul>
            </div>
          </div>
          <!-- Hoja 5 -->
          <div id="home-content-4" class="col-12 home-content no-view text-center">
            <div class="row titulo-home-content-4">
              <div class="col">
                <h2>¿Qué necesitas para ser parte del registro?</h2>
              </div>
            </div>
            <div class="row tips-home-content-4">
              <div class="col">
                <div class="tip">
                  <img src="img/icon_tips.png" alt="">
                  <p class="importante-1">Debes tener <br /> entre 18 y 55 años.</p>
                </div>
              </div>
              <div class="col">
                <div class="tip">
                  <img src="img/icon_tips.png" alt="">
                  <p class="importante-1">Indice de masa corporal <br />entre 18.5 - 29.9 kg/m2.</p>
                </div>
              </div>
              <div class="col">
                <div class="tip">
                  <img src="img/icon_tips.png" alt="">
                  <p class="importante-1">Debes encontrarte <br /> en buen estado de salud.</p>
                </div>
              </div>
            </div>

          </div>
          <!-- Footer -->
          <div id="home-content-5" class="col-12 home-content no-view">
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
          <a href="{!! route('inicio') !!}">
            <picture class="logo_darcelulas">
              <img class="img-fluid" src="{!! asset('img/logo_darcelulas_blanco_w.png') !!}" alt="">
            </picture>
          </a>
          <h1>Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas</h1>
        </div>
      </div>
      <div id="dos_home_m" class="row align-items-center total_m text-center">
        <div class="col-12">
          <h2>¿Qué es DarCélulas?</h2>
          <p class="importante-1">DarCélulas es el programa de donación del Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas en Colombia. Los registros en el mundo se encargan de coordinar la búsqueda de donantes anónimos y voluntarios para dar sus Células Formadoras de la Sangre a pacientes con enfermedades hematológicas graves que requieren un trasplante para salvar su vida.</p>
        </div>
      </div>
      <div id="tres_home_m" class="row align-items-center total_m text-center">
        <div class="col-12">
          <h2>¿Por qué DarCélulas en Colombia?</h2>
          <p class="importante-1">En Colombia, <b>la leucemia es la principal causa de muerte en niños de 5 a 14 años.</b> Para muchas personas con ésta y otras enfermedades severas de la sangre, <b>un trasplante de Células Formadoras de la Sangre</b> obtenidas de un donante familiar <b>es la única posibilidad de vida.</b> Sin embargo, tan solo <b>3 de cada 10 pacientes encuentran un familiar compatible.</b> Los demás deben buscar un donante anónimo y voluntario que sea compatible a través de un registro.</p>
        </div>
      </div>
      <div id="cuatro_home_m" class="row align-items-center total_m text-center">
        <div class="col-12">
          <h2>¿Para quiénes se donan células?</h2>
          <div class="importante-1">
            <p>Los niños o adultos con las siguientes condiciones pueden necesitar un trasplante de Células Formadoras de la Sangre:</p>
            <ul>
              <li>Leucemias (la razón más frecuente)</li>
              <li>Anemia aplásica severa</li>
              <li>Hemoglobinopatías</li>
              <li>Otras alteraciones del sistema hematopoyético</li>
            </ul>
          </div>
        </div>
      </div>
      <div id="cinco_home_m" class="row align-items-center total_m text-center">
        <div class="col-12">
          <div class="row">
            <div class="col">
              <h2>¿Qué necesitas para ser parte del registro?</h2>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="tip">
                <img src="img/icon_tips.png" alt="">
                <p class="importante-1">Debes tener <br /> entre 18 y 55 años.</p>
              </div>
            </div>
            <div class="col">
              <div class="tip">
                <img src="img/icon_tips.png" alt="">
                <p class="importante-1">Indice de masa corporal entre 18.5 - 29.9 kg/m2.</p>
              </div>
            </div>
            <div class="col">
              <div class="tip">
                <img src="img/icon_tips.png" alt="">
                <p class="importante-1">Debes encontrarte <br /> en buen estado de salud.</p>
              </div>
            </div>
          </div>
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
  <script src="{!! asset('js/home.js') !!}"></script>
@endsection
