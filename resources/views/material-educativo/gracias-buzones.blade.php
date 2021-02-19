@extends('layouts.internas')

@section('styles')
<link rel="stylesheet" href="{!! asset('css/styles_scroll.css') !!}">
@endsection

@section('content')
<div class="col-12 ciudades gracias">
    <div class="row">
        <div class="container">
            <div class="row">
                <article>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-fluid my-5" src="{!! asset('img/material_educativo/Landing-Agradecimiento-imagen.png') !!}" alt="">
                            </div>
                            <div class="col-md-7 justify-content-center text-center">
                                <h2><br><br><br>¡Felicitaciones!</h2>
                                <div class="boxgray">
                                    <p><br>Solo las personas realmente interesadas en hacer parte de esta comunidad llegan hasta este punto, por eso nos emociona contar contigo. Por favor diligencia el siguiente formulario y espera el kit de
                                        inscripción en tu domicilio.<br><br></p>
                                </div>
                                <button>
                                    <p>
                                        <strong>Encuentra el listado de buzones</strong>
                                        <img class="img-fluid descarga float-right" src="{!! asset('img/material_educativo/Landing-Agradecimiento-circulo.png') !!}" alt="">
                                        <strong>disponibles en tu ciudad</strong>
                                    </p>
                                </button>
                                <div class="card col align-self-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>Deseo agendar una <a href="#">asesoría online
                                                        <span>(Clic)</span></a></strong></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Quiero seguir conociendo <a href="#">más información
                                                        <span>(Clic)</span></a></strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{!! asset('js/quienesSomos.js') !!}"></script>
@endsection