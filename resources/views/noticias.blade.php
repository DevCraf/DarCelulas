@extends('layouts.internas')

@section('styles')
<link rel="stylesheet" href="{!! asset('css/styles_scroll.css') !!}">
@endsection

@section('content')
<!-- DESKTOP -->
<div class="col-12">
    <div class="row">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center mt-4">
                    <h1>Artículos</h1>
                </div>
                <div class="col-12 text-center">

                    <ul class="lista-noticias">
                        <li>
                            <img class="img-fluid mb-2" src="{!! asset('img/icons/noticias/icono-celulas-madres.png') !!}" alt="">
                            <p>La sangre de cordón umbilical, además de dar vida puede salvar otras</p>
                            <a class="btn_general text-center" href="{!! route('laSangreDeCordonUmbilicalAdemasDeDarVidaPuedeSalvarOtras') !!}">Leer más</a>
                        </li>
                        <li>
                            <img class="img-fluid mb-2" src="{!! asset('img/icons/noticias/icono-donde-viven-cfs.png') !!}" alt="">
                            <p>¿En dónde viven las células formadoras de la sangre?</p>
                            <a class="btn_general text-center" href="{!! route('enDondeVivenLasCelulasFormadorasDeLaSangre') !!}">Leer más</a>
                        </li>
                        <li>
                            <img class="img-fluid mb-2" src="{!! asset('img/icons/noticias/icono-noticia_cuida_tu_salud.png') !!}" alt="">
                            <p>Para salvar vidas primero hay que proteger la propia</p>
                            <a class="btn_general text-center" href="{!! route('paraSalvarVidasPrimeroHayQueProtegerLaPropia') !!}">Leer más</a>
                        </li>
                        <li>
                            <img class="img-fluid mb-2" src="{!! asset('img/icons/noticias/icono_conociendo_hla.png') !!}" alt="">
                            <p>Conociendo el HLA</p>
                            <a class="btn_general text-center" href="{!! route('conociendoElHla') !!}">Leer más</a>
                        </li>
                        <li>
                            <img class="img-fluid mb-2" src="{!! asset('img/icons/noticias/icono-encuesta.png') !!}" alt="">
                            <p>Conoce la experiencia de Mauricio, quien se inscribió en DarCélulas y comparte un mensaje de altruismo</p>
                            <a class="btn_general text-center" href="{!! route('salvarUnaVida') !!}">Leer más</a>
                        </li>
                        <li>
                            <img class="img-fluid mb-2" src="{!! asset('img/icons/noticias/icono-bethematch.png') !!}" alt="">
                            <p>Uno de los registros más grandes del mundo</p>
                            <a class="btn_general text-center" href="{!! route('beTheMatch') !!}">Leer más</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection