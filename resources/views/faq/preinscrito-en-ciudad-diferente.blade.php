@extends('layouts.internas')

@section('styles')
  <link rel="stylesheet" href="{!! asset('css/styles_scroll.css') !!}">
@endsection


@section('content')
<div class="col-12 background_general">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-4 py-4">
          <img class="img-fluid" src="{!! asset('img/logo_idcbis.png') !!}" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row my-5 pt-5">
    <div class="col-12">
      <h1>Si ya estoy preinscrito pero en una ciudad diferente a Bogotá, ¿cómo puedo completar el proceso de inscripción?</h1>
    </div>
    <div class="col-12 mt-4">
      <p>En esta <b>primera fase de captación</b> de donantes, la inscripción la realizamos durante una <b>donación de sangre para tomar la muestra</b> para tipificación. Si bien tenemos proyectado aliarnos con bancos de sangre que tengan cobertura nacional, en el momento la inscripción se completa acercándote al <b>Banco Distrital de Sangre IDCBIS en Bogotá.</b> </p>
      <p><b>Estamos trabajando</b> para desarrollar <b>otras estrategias de inscripción de donantes</b> que no requieran de la toma de muestra de sangre. De esa manera, las personas interesadas podrán tomar otro tipo de muestras y enviarlas vía correo a las instalaciones del registro; lo que permitiría completar la inscripción <b>desde cualquier ciudad del país.</b></p>
      <p>En conclusión, tienes <b>dos opciones</b> para completar tu proceso de inscripción: </p>
      <ol>
        <li>Comunícate con nosotros para <b>agendar tu visita al Banco Distrital de Sangre IDCBIS si piensas viajar a la ciudad de Bogotá.</b></li>
        <li><b>Mantén tu contacto</b> con nosotros y te informaremos cuando se amplíe la estrategia de toma de muestra mediante donación de sangre en otros bancos del país; o <b>cuando implementemos las nuevas estrategias</b> para que completes el proceso desde tu ciudad.</li>
      </ol>
    </div>
  </div>
</div>


@endsection
