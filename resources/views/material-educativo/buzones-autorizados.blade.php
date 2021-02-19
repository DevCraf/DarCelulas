@extends('layouts.internas')

@section('styles')
<link rel="stylesheet" href="{!! asset('css/styles_scroll.css') !!}">
@endsection

@section('content')
<div class="col-12 ciudades ma-educativo">
    <div class="row">
        <div class="container">
            <div class="row">
                <article>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-12 justify-content-center text-center">
                                <h2><br>Entrega de kit de inscripción en buzones
                                    autorizados<br></h2>
                                <div class="boxgray">
                                    <p><br>Una vez culmines la lectura de la
                                        <a class="ancla" href="#guia"> <em><strong> guía informativa del donante</strong></em> </a> , el <a class="ancla" href="#speech"><em><strong>video Speech DarCélulas</strong></em></a> y el <a class="ancla" href="#intrucciones"><em><strong>video de instrucciones</strong></em></a>, encontrarás un cuestionario para confirmar que la información fue comprendida. En este deberás obtener una puntuación mínima de 8/10 para continuar con el siguiente paso.<br> Si encuentras el mensaje en la carpeta de spam por favor márcalo como seguro.<br><br>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12 justify-content-center text-center">
                                <div class="row">
                                    <div class="col-md-4 align-self-center">
                                        <img class="img-fluid" src="{!! asset('img/material_educativo/Material-educativo-buzones-autorizados.png') !!}" alt="">
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <p>Cuando hayas aprobado el cuestionario, enviaremos un correo electrónico con el que podrás acercarte a uno de nuestros buzones autorizados para reclamar el kit de inscripción. No olvides revisar tu bandeja de spam o correo no deseado.</br>El listado de buzones lo encontrarás en esta <strong><em>página
                                                    web</em></strong>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 align-self-center">
                                        <p>Una persona de la institución donde se encuentra el buzón te hará entrega del kit que contiene la documentación que deberás diligenciar junto con el sobre para toma de muestra. <strong><em>Todo ello deberás depositarlo en el buzón para el retorno a nuestra sede en Bogotá</em></strong>.</p>
                                    </div>
                                    <div class="col-md-4 align-self-center">
                                        <img class="img-fluid" src="{!! asset('img/material_educativo/Material-educativo-buzones-documentos.png') !!}" alt="">
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-md-4  align-self-center">
                                        <a class="ancla" href="#intrucciones">
                                            <img class="img-fluid" src="{!! asset('img/material_educativo/Material-educativo-buzones-video.png') !!}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-6 align-self-center">
                                        <p>En el <a class="ancla" href="#intrucciones"><strong><em>video de instrucciones</em></strong></a> encontrarás las indicaciones de manera más detallada.</p>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-10">

                                        <hr>
                                        <h2 id="speech" name="speech">Equipo de profesionales DarCélulas te da la bienvenida<br><br></h2>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/eNSP0PyDtPc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                        </div>
                                        <div id="guia" name="guia"></div>
                                        </br></br>

                                        <a href="{!! asset('documentos/Cartilla-Base.pdf') !!}">
                                            <button class="degrade">
                                                <p><strong>Guía del donante</strong>
                                                    <img class="img-fluid descarga float-right" src="{!! asset('img/material_educativo/Material-educativo-buzones-descarga.png') !!}" alt="">
                                                    <br> Hemos diseñado este documento especialmente para ti
                                                </p>
                                            </button>
                                        </a>

                                        <h2 id="intrucciones" name="intrucciones"><br>Conoce cómo llevar a cabo tu inscripción<br><br></h2>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/eNSP0PyDtPc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                        </div>
                                        <div class="card col align-self-center">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="enterbutton">
                                                        <h2>Cuestionario
                                                            DarCélulas</h2>
                                                        <p>Las siguientes preguntas son una herramienta para asegurarnos que la información que te brindamos ha sido clara para ti. Puedes repetir el cuestionario tantas veces como lo desees y podrás saber qué temas que te sugerimos repasar para poder obtener el puntaje deseado.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="inicia degrade">
                                            Inicia dando clic aquí
                                        </button>
                                    </div>

                                    <img class="img-fluid descarga float-right" src="{!! asset('img/material_educativo/Material-educativo-footer.png') !!}" alt="">

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