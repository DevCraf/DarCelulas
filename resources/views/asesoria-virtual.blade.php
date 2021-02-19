@extends('layouts.internas')

@section('styles')
<link rel="stylesheet" href="{!! asset('css/styles_scroll.css') !!}">
@endsection

@section('content')
<div class="col-12 ciudades">
    <div class="row">
        <div class="container">
            <article>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-12 justify-content-center text-center">
                                <h2><br>Solicita tu asesoría virtual</h2>
                                <div class="boxgray">
                                    <p style="margin-bottom:0px;"><br>Por favor diligencia el <strong><em><a href="#">siguiente formulario</a></em></strong> para poder agendar tu asesoría.</p>
                                    <p>Una de nuestras profesionales del equipo DarCélulas te contactará.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row h-100">
                            <div class="col-md-6 cont-stefy">
                                <img class="img-fluid my-5 stefy" src="{!! asset('img/ciudades/stefy-asesoria-virtual.png') !!}" alt="">
                            </div>
                            <div class="col-md-6 justify-content-center text-center">
                                <div class="row h-100 form-cont">
                                    <form class="my-auto">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="tipoDocumento">Tipo de Documento</label>
                                                <select id="tipoDocumento" class="form-control">
                                                    <option selected>Elegir...</option>
                                                    <option>CC</option>
                                                    <option>CE</option>
                                                    <option>NUIP</option>
                                                    <option>PA</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-9">
                                                <label for="Numero">Número<br>Documento</label>
                                                <input name="docnumber" type="text" class="form-control" placeholder="Solo números" pattern="[0-9]{1,10}" id="docnumber">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="ciudad">Ciudad</label>
                                                <select id="ciudad" class="form-control" value="Elije Tu Ciudad">
                                                    <option hidden selected>Selecciona una opción</option>
                                                    <option value="Bogotá">Bogotá</option>
                                                    <option value="Medellín">Medellín</option>
                                                    <option value="Cali">Cali</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="Calendario">Calendario</label>
                                                <select id="Calendario" class="form-control">
                                                    <option></option>
                                                    <option>Elegir...</option>
                                                    <option>Elegir...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label for="Inquietud">Inquietud</label>
                                            <textarea class="form-control" id="Inquietud" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary aseso">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{!! asset('js/quienesSomos.js') !!}"></script>
<script>
var input = document.getElementById('docnumber');
input.oninvalid = function(event) {
    event.target.setCustomValidity('Usar Numeros sin puntos u otros caracteres');
}
</script>
@endsection