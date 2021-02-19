@extends('layouts.internas')

@section('styles')
  <link rel="stylesheet" href="{!! asset('css/styles_scroll.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/lightgallery.min.css') !!}">
@endsection

@section('content')
<!-- DESKTOP -->
<div class="col-12">
  <div class="row">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 text-center mt-4">
          <h1>Videos DarCélulas</h1>
        </div>
        <div class="col-12 text-center">
          <div id="video-gallery">

            <a class="video-item principal" href="https://www.youtube.com/watch?v=1MHcZDahq9Y">
              <img class="img-fluid mb-2" src="{!! asset('img/videos/video-paciente.jpg') !!}" alt="">
              <p>#DarCélulas - Testimonio de paciente trasplantado de células formadoras de la sangre</p>
            </a>
            <a class="video-item" href="https://www.youtube.com/watch?v=IELdfvMYl5Q">
              <img class="img-fluid mb-2" src="{!! asset('img/videos/video-familiar.jpg') !!}" alt="">
              <p>#DarCélulas - Esposa de paciente trasplantado da su testimonio</p>
            </a>
            <a class="video-item" href="https://www.youtube.com/watch?v=kjd_eiXiJ0E">
              <img class="img-fluid mb-2" src="{!! asset('img/videos/video-donante.jpg') !!}" alt="">
              <p>#DarCélulas - Donante de células que salvó la vida de su hermana</p>
            </a>
            <a class="video-item" href="https://www.youtube.com/watch?v=mawz3OyJCEw">
              <img class="img-fluid mb-2" src="{!! asset('img/videos/video-experta.jpg') !!}" alt="">
              <p>#DarCélulas - Experta explica la importancia del acompañamiento a pacientes con enfermedades graves de la sangre</p>
            </a>



            <a class="video-item" href="https://www.youtube.com/watch?v=fLZJF0Ga5JQ">
              <img class="img-fluid mb-2" src="{!! asset('img/videos/video1.jpg') !!}" alt="">
              <p>#DarCélulas - Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas</p>
            </a>
            <a class="video-item" href="https://www.youtube.com/watch?v=3RAP71GoL0w">
              <img class="img-fluid mb-2" src="{!! asset('img/videos/video2.jpg') !!}" alt="">
              <p>#DarCélulas - Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas</p>
            </a>
            <a class="video-item" href="https://www.youtube.com/watch?v=rt7rlo5QBAE">
              <img class="img-fluid mb-2" src="{!! asset('img/videos/video3.jpg') !!}" alt="">
              <p>#DarCélulas - Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas</p>
            </a>
            <a class="video-item" href="https://www.youtube.com/watch?v=x2mz7ylui6U">
              <img class="img-fluid mb-2" src="{!! asset('img/videos/video4.jpg') !!}" alt="">
              <p>#DarCélulas - Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas</p>
            </a>
            <a class="video-item" href="https://www.youtube.com/watch?v=gZpYvgip-rw">
              <img class="img-fluid mb-2" src="{!! asset('img/videos/video5.jpg') !!}" alt="">
              <p>#DarCélulas - Ricardo Pirajón deportista trasplantado con células formadoras de la sangre</p>
            </a>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')  
  <script src="{!! asset('js/lightgallery.min.js') !!}"></script>
  <script src="{!! asset('js/lg-video.min.js') !!}"></script>
  <script type="text/javascript">
    lightGallery(document.getElementById('video-gallery'));
  </script>
@endsection
