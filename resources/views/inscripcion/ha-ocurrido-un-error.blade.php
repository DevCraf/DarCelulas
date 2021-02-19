@extends('layouts.main')

@section('content')
  <!-- Fondo -->
  <div id="fondo_general" data-id="0" class="row pagina">
    <!-- body -->
    <div class="col">
      <!-- Menú -->
      @include('includes.logos')
      <!-- Contenido -->
      <div class="container">
        <div id="center" class="row align-items-center">
          <!-- Hoja 2 -->
          <div class="col home-content">
            <div class="row justify-content-center">
              <div class="col-8">
                <img class="img-fluid mb-3 mt-movil" src="{!! asset('img/error.png') !!}" alt="Error en la inscripcion DarCelulas">
              </div>
              <div class="col-12">
                <ul class="lista-gracias">
                  <li>
                    <img class="img-fluid" src="{!! asset('img/estado_preinscripcion_paso3.png') !!}" alt="Estado de inscripción en DarCélulas">
                  </li>
                  <li>
                    {!! Session::get('mensaje') !!}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- BOTTOM -->
    <div id="footer_gracias" class="container-fluid">
      <div class="row align-items-center">
          <div class="col-3">
            <p>Síguenos en nuestras redes sociales</p>
            <span class="perfil_social">@IDCBIS | </span>
            <ul class="redes">
              <li>
                <a href="https://www.facebook.com/IDCBIS/" target="_blank">
                  <span class="facebook"></span>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/idcbis/?hl=es" target="_blank">
                  <span class="instagram"></span>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/IDCBIS" target="_blank">
                  <span class="twitter"></span>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UCFCq9ge7iw6zMZ5_WoyvTNg" target="_blank">
                  <span class="youtube"></span>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-6 text-center">
            <p>Edificio IDCBIS - Carrera 32 # 12 - 81 | Teléfono: (57+1) 364 9620 Ext. 9447</p>
            <p>captacionregistro@idcbis.org.co | contacto@idcbis.org.co</p>
          </div>
          <div class="col-3">
            <a href="https://idcbis.org.co/" target="_blank">
              <picture class="logo_bottom logo_bottom_idcbis_azul">
                <img class="img-fluid" src="{!! asset('img/logo_idcbis_azul.png') !!}" alt="">
              </picture>
            </a>
          </div>
      </div>
    </div> <!-- container -->


  </div> <!-- row fondo -->




<!-- Event snippet for Registro conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-768217027/PvRgCNS-2ZMBEMOfqO4C'});
</script>
@endsection
