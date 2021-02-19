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
            <h1>¿Tienes preguntas?</h1>
          </div>
          <!-- Hoja 2 -->
          <div id="home-content-1" class="col home-content no-view">
            <div class="h100 align-items-center">
              <div class="row align-items-center">
                <div class="col-7">
                  <!-- <h2 class="mb-4">¿Tienes preguntas?</h2> -->
                  <h4>Pregúntanos por Redes Sociales <b>#DarCélulas</b></h4>
                  <p>Alguien más puede tener tu misma pregunta</p>
                  <ul class="redes background_blue mb-4">
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

                  <h2>Preguntas frecuentes</h2>
                  <ol>
                    <li class="mb-2">
                      ¿Cuándo estarían <b>disponibles</b> los donantes inscritos en el registro para hacer <b>búsquedas y solicitar células formadoras de la sangre</b> (células progenitoras hematopoyéticas) para un trasplante?
                      <a href="" class="enlace_interno" data-toggle="modal" data-target="#preguntaUno">
                        Respuesta
                      </a>
                    </li>
                    <li class="mb-2">
                        ¿Es lo mismo donación de <b>células formadoras de la sangre</b> (células progenitoras hematopoyéticas) que donación de <b>médula ósea</b>?
                      <a href="" class="enlace_interno" data-toggle="modal" data-target="#preguntaDos">
                        Respuesta
                      </a>
                    </li>
                    <li class="mb-2">
                        ¿Cuáles son las <b>fuentes de obtención</b> de las células formadoras de la sangre?
                      <a href="" class="enlace_interno" data-toggle="modal" data-target="#preguntaTres">
                        Respuesta
                      </a>
                    </li>
                    <li>
                      Si ya estoy <b>preinscrito</b> pero <b>en una ciudad diferente a Bogotá,</b> ¿cómo puedo completar el proceso de inscripción?
                      <a href="" class="enlace_interno" data-toggle="modal" data-target="#preguntaCuatro">
                        Respuesta
                      </a>
                    </li>
                    <li>
                      ¿Puedo donar para alguien que conozco?
                      <a href="" class="enlace_interno" data-toggle="modal" data-target="#preguntaCinco">
                        Respuesta
                      </a>
                    </li>
                  </ol>
                </div>
                <!-- Formulario -->
                <div class="col-5">

                  <form class="form-horizontal form-inscripcion" action="send.php" method="post">

                    <!-- Nombre -->
                    <div class="form-group row">
                      <div class="col-12">
                        <div class="lineb">
                          <input type="text" name="name" value="{{ old('name') }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nombre*">

                          @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('name') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>

                    <!-- Telefono -->
                    <div class="form-group row">
                      <div class="col-12">
                        <div class="lineb">
                          <input type="text" name="phone" value="{{ old('phone') }}" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Teléfono">

                          @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>

                    <!-- Correo electrónico -->
                    <div class="form-group row">
                      <div class="col-12">
                        <div class="lineb">
                          <input type="email" name="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo electrónico*">

                          @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>

                    <!-- Mensaje -->
                    <div class="form-group row">
                      <div class="col-12">
                        <div class="lineb">
                          <textarea class="form-control" name="mensaje" rows="2" cols="80" placeholder="Mensaje*"></textarea>

                          @if ($errors->has('mensaje'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('mensaje') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-10 offset-sm-4">
                        <button type="submit" class="btn">Enviar</button>
                      </div>
                    </div>

                  </form>

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
                  <a class="leer_siguiente" href="{!! route('recursosEducativos') !!}">
                    Recursos educativos <span><i class="fas fa-caret-right"></i></span>
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
          <h1>¿Tienes preguntas?</h1>
        </div>
      </div>

      <!-- Hoja 2 -->
      <div id="fondo_general_m" class="row align-items-center">
        <div class="col-12 text-left py-3">
          <h2 class="mb-4">¿Tienes preguntas?</h2>
          <h4>Pregúntanos por Redes Sociales <b>#DarCélulas</b></h4>
          <p>Alguien más puede tener tu misma pregunta</p>
          <ul class="redes background_blue">
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

          <h2 class="mt-4">Preguntas frecuentes</h2>
          <ol>
            <li class="mb-2">
              ¿Cuándo estarían <b>disponibles</b> los donantes inscritos en el registro para hacer <b>búsquedas y solicitar células formadoras de la sangre</b> (células progenitoras hematopoyéticas) para un trasplante?
              <a href="" class="enlace_interno" data-toggle="modal" data-target="#preguntaUno">
                Respuesta
              </a>
            </li>
            <li class="mb-2">
                ¿Es lo mismo donación de <b>células formadoras de la sangre</b> (células progenitoras hematopoyéticas) que donación de <b>médula ósea</b>?
              <a href="" class="enlace_interno" data-toggle="modal" data-target="#preguntaDos">
                Respuesta
              </a>
            </li>
            <li class="mb-2">
                ¿Cuáles son las <b>fuentes de obtención</b> de las células formadoras de la sangre?
              <a href="" class="enlace_interno" data-toggle="modal" data-target="#preguntaTres">
                Respuesta
              </a>
            </li>
            <li>
              Si ya estoy <b>preinscrito</b> pero <b>en una ciudad diferente a Bogotá,</b> ¿cómo puedo completar el proceso de inscripción?
              <a href="" class="enlace_interno" data-toggle="modal" data-target="#preguntaCuatro">
                Respuesta
              </a>
            </li>
            <li>
              ¿Puedo donar para alguien que conozco?
              <a href="" class="enlace_interno" data-toggle="modal" data-target="#preguntaCinco">
                Respuesta
              </a>
            </li>
          </ol>

          <form class="form-horizontal form-inscripcion mt-4" action="send.php" method="post">

            {{ csrf_field() }}

            <!-- Primer nombre -->
            <div class="form-group row">
              <div class="col-12">
                <div class="lineb">
                  <input type="text" name="name" value="{{ old('name') }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nombre*">

                  @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>

            <!-- Telefono -->
            <div class="form-group row">
              <div class="col-12">
                <div class="lineb">
                  <input type="text" name="phone" value="{{ old('phone') }}" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Teléfono">

                  @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>

            <!-- Correo electrónico -->
            <div class="form-group row">
              <div class="col-12">
                <div class="lineb">
                  <input type="email" name="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo electrónico*">

                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>

            <!-- Mensaje -->
            <div class="form-group row">
              <div class="col-12">
                <div class="lineb">
                  <textarea class="form-control" name="mensaje" rows="4" cols="80" placeholder="Mensaje*"></textarea>

                  @if ($errors->has('mensaje'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('mensaje') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-10 offset-sm-4">
                <button type="submit" class="btn">Enviar</button>
              </div>
            </div>

          </form>

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
          <a class="leer_siguiente" href="{!! route('recursosEducativos') !!}">
            Recursos educativos
          </a>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Modal pregunta 1 -->
<div class="modal fade" id="preguntaUno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p>Las búsquedas de donantes inscritos y solicitudes de células formadoras de la sangre para trasplantes se harán cuando: <b>(i)</b> el registro cuente con un <b>número suficiente de donantes inscritos</b> y <b>(ii)</b> se cuente con un <b>procedimiento estandarizado</b> y coordinado con los centros de colecta y las unidades de trasplante.</p>
        <p>Ya que es un proceso completamente nuevo en el país, en esta primera etapa necesitamos evaluar la voluntad de donación de los colombianos y afinar todos los procesos necesarios para avanzar a la búsqueda formal de donantes compatibles. Quienes estén inscritos en el registro al momento de poner en marcha estos nuevos procesos quedarán disponibles como donantes automáticamente.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal pregunta 2 -->
<div class="modal fade" id="preguntaDos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p>Es importante que entiendas cuatro puntos básicos:</p>
        <ol type="a">
          <li><b>Las células formadoras de la sangre</b> se encuentran ubicadas dentro de la médula ósea que es donde se desarrollan y diferencian; es decir, <b>viven en el centro de nuestros huesos</b>. </li>
          <li><b>Inicialmente, la obtención de estas células se hacía por extracción directa desde la médula ósea</b> en un procedimiento de aspiración del hueso de la cadera. Por esto, se llamó “trasplante de médula ósea”, a pesar de que lo que se donaba eran las células y no la médula ósea. Este procedimiento <b>se hace con poca frecuencia en la actualidad</b>; sin embargo, para algunas enfermedades y tipos de pacientes específicos, puede ser el método de obtención de las células más adecuado sin que represente mayores riesgos para el donante.</li>
          <li>Hoy en día, el procedimiento más frecuente de obtención de las células consiste en moverlas desde la médula ósea hacia la sangre (mediante un medicamento especial) y extraerlas de las venas directamente como en una donación de sangre. A este procedimiento se le llama <b>donación por aféresis</b>. </li>
          <li>¡Ojo!: la médula ósea (al interior de los huesos) <b>NO</b> es lo mismo que la médula espinal (cordón nervioso dentro de la columna vertebral); por eso, cuando donas <b>no tienes ningún riesgo de sufrir parálisis o lesiones de la columna</b>. Esta es una confusión muy frecuente en nuestra sociedad, por esta razón preferimos hablar de células formadoras de la sangre.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal pregunta 3 -->
<div class="modal fade" id="preguntaTres" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p>Existen <b>dos formas</b> de dar tus células: tomarlas de la sangre o directamente del hueso de la cadera. Si decides <b>dar tus células por la sangre</b>, durante cinco días recibirás una inyección preparatoria que provoca que las células formadoras que están en los huesos salgan hacia las venas. Así, se pueden recoger fácilmente como en una donación de sangre. Este es el método más frecuente en la actualidad.</p>
        <p>Para algunas enfermedades y tipos de pacientes específicos, puede requerirse que des tus células por extracción directa desde la médula ósea en un procedimiento de <b>aspiración del hueso de la cadera</b>. Es poco frecuente y no representa mayores riesgos para el donante.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal pregunta 4 -->
<div class="modal fade" id="preguntaCuatro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p>En esta <b>primera fase de captación</b> de donantes, la inscripción la realizamos durante una <b>donación de sangre para tomar la muestra</b> para tipificación. Si bien tenemos proyectado aliarnos con bancos de sangre que tengan cobertura nacional, en el momento la inscripción se completa acercándote al <b>Banco Distrital de Sangre IDCBIS en Bogotá.</b> </p>
        <p><b>Estamos trabajando</b> para desarrollar <b>otras estrategias de inscripción de donantes</b> que no requieran de la toma de muestra de sangre. De esa manera, las personas interesadas podrán tomar otro tipo de muestras y enviarlas vía correo a las instalaciones del registro; lo que permitiría completar la inscripción <b>desde cualquier ciudad del país.</b></p>
        <p>En conclusión, tienes <b>dos opciones</b> para completar tu proceso de inscripción: </p>
        <ol>
          <li>Comunícate con nosotros para <b>agendar tu visita al Banco Distrital de Sangre IDCBIS si piensas viajar a la ciudad de Bogotá.</b></li>
          <li><b>Mantén tu contacto</b> con nosotros y te informaremos cuando se amplíe la estrategia de toma de muestra mediante donación de sangre en otros bancos del país; o <b>cuando implementemos las nuevas estrategias</b> para que completes el proceso desde tu ciudad.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal pregunta 5 -->
<div class="modal fade" id="preguntaCinco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p>Para que seas seleccionado como un donante de células formadoras de la sangre <b>debes ser compatible</b> con el paciente; esto quiere decir que sus células deben ser tan parecidas que pueden convivir en el cuerpo del receptor sin tener ningún problema.</p>
        <p>Cuando una persona es diagnosticada con alguna enfermedad grave de la sangre, lo primero que se hace es buscar entre sus hermanos para ver si hay uno idéntico, ya que la probabilidad de encontrar un hermano compatible es mucho más alta (porque heredan la información de los mismos padres) que la probabilidad de encontrar alguien tan parecido fuera de la familia. Sin embargo, <b>solo 3 de cada 10 personas tiene un hermano idéntico</b>, el 70% restante debe acudir a un registro para encontrar un donante no familiar que sea compatible.</p>



Si tú no eres hermano o hermana del paciente, la posibilidad de ser compatible con él o ella es la misma que la posibilidad de ser compatible con un extraño. Por lo tanto, al inscribirte al registro, <b>te comprometes a ser un donante para cualquier persona que lo requiera</b>. Esta es la manera de asegurar que cualquier paciente pueda acceder a un donante siempre que exista esa compatibilidad.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
  <script src="{!! asset('js/quienesSomos.js') !!}"></script>
@endsection
