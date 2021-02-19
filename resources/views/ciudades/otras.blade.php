@extends('layouts.internas')

@section('styles')
<link rel="stylesheet" href="{!! asset('css/styles_scroll.css') !!}">
@endsection

@section('content')
<div class="col-12 ciudades ciudades-02">
    <div class="row">
        <div class="container">
            <div class="row">
                <article>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-fluid my-5" src="{!! asset('img/ciudades/completado-otras-03.png') !!}"
                                    alt="">
                            </div>
                            <div class="col-md-7 justify-content-center text-center">
                                <div class="boxgray">
                                    <h2><br>Gracias por tu intención de ayuda. Te hemos enviado un correo electrónico
                                        con
                                        una imagen muy especial, al compartirla en tus redes sociales nos ayudas a
                                        llegar a más personas. Si encuentras el mensaje en la carpeta de spam por favor
                                        márcalo como seguro.</h2>
                                </div>
                                <button class="botras"><b>En el momento no contamos con un método para poder
                                        formalizar la inscripción en tu lugar de residencia pero continuamos trabajando
                                        para poder lograrlo a futuro. Mantente pendiente
                                        de tu correo electrónico y de nuestras redes sociales.</b><br>
                                </button>
                                <div class="card col align-self-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="enterbutton">
                                                <p>Si tienes la posibilidad de visitar temporalmente Bogotá, Cali,
                                                    Medellín o Barranquilla, te invitamos a que te comuniques con
                                                    nosotros a la línea telefónica 031 3649620 Ext. 9447, en la que
                                                    tenemos atención de <strong>lunes a viernes de 8 a.m. a 12 p.m. y de
                                                        2 a 4 p.m. Nuestro equipo de profesionales estará disponible
                                                        para evaluar tu caso.</strong>
                                                </p>
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