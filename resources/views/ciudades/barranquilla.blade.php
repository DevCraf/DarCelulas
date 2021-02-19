@extends('layouts.internas')

@section('styles')
<link rel="stylesheet" href="{!! asset('css/styles_scroll.css') !!}">
@endsection

@section('content')
<div class="col-12 ciudades">
    <div class="row">
        <div class="container">
            <div class="row">
                <article>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-fluid my-5"
                                    src="{!! asset('img/ciudades/completado-barranquilla-05.png') !!}" alt="">
                            </div>
                            <div class="col-md-7 justify-content-center text-center">
                                <h2><br>¡Has completado tu preinscrpcion de DarCélulas!</h2>
                                <p>Estas un paso más cerca de hacer parte de nuestra comunidad de donantes.</p>
                                <div class="boxgray">
                                    <p><br>Gracias por tu intencion de ayuda. Te hemos enviado un correo electronico con
                                        una imagn muy especial, al compartirla en tus redes sociales nos ayudas a llegar
                                        a más personas.<br>
                                        Si encuentras el mensaje en la carpeta de spam por favor márcalo como
                                        seguro.<br><br></p>
                                </div>
                                <h2>Te invitamos a continuar tu proceso.</h2>
                                <button><strong>Para poder hacerlo por favor escoge uno de los métodos disponibles en la
                                        ciudad de Barranquilla.</strong><br>
                                    <p>Te sugerimos leer la información de cada uno antes de iniciar el proceso</p>
                                </button>
                                <div class="card col align-self-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>Entrega de kit de inscripción en <a
                                                        href="{!! route ('buzonesAutorizados') !!}">buzones autorizados
                                                        <span>(Clic)</span></a></strong></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Entrega de kit de inscripción a <a
                                                        href="{!! route ('entregaKitDomicilio') !!}">domicilio
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