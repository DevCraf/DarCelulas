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
                                <img class="img-fluid my-5" src="{!! asset('img/ciudades/completado-bogota-01.png') !!}"
                                    alt="">
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
                                <h2>Te invitamos a continuar tuproceso en el siguiente enlace:</h2>
                                <button class="botras"><strong>Agenda tu inscripción presencial</strong><br>
                                </button>
                                <div class="card col align-self-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="enterbutton">
                                                <p>El horario de atención es de lunes a viernes
                                                    de 8:00 a.m. a 12 m. y de 2 p.m. a 4 p.m.<br><br>

                                                    Ese día realizarás la lectura y firma del consentimiento informado,
                                                    te tomaremos una muestra de sangre para
                                                    tu examen de compatibilidad y aclararemos cualquier inquietud con la
                                                    asesoría de un profesional.</p>
                                            </div>
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