@extends('layouts.main')

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
                        <h1>¡Quiero preinscribirme!</h1>

                    </div>
                    <!-- Hoja 2 -->
                    <div id="home-content-1" class="col home-content no-view">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h2 class="mb-3">¡Quiero preinscribirme!</h2>
                                <p>Registrarte como donante es una decisión muy importante, queremos saber que estás
                                    totalmente seguro, si es así por favor confirmalo en el formulario.</p>
                                <img class="fluid-img"
                                    src="{!! asset('img/conoce_el_registro/imagen_preinscripcion.png') !!}"
                                    alt="DarCelulas">
                            </div>
                            <!-- Formulario -->
                            <div class="col-5 offset-1">

                                <form class="form-horizontal form-inscripcion" action="{!! route('postNewDonor') !!}"
                                    method="post">

                                    {{ csrf_field() }}

                                    <!-- Primer nombre -->
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="lineb">
                                                <input type="text" name="name" value="{{ old('name') }}"
                                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                    placeholder="Primer nombre*" required>

                                                @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Segundo nombre -->
                                        <div class="col-sm-12 col-md-6">
                                            <div class="lineb">
                                                <input type="text" name="second_name" value="{{ old('second_name') }}"
                                                    class="form-control" placeholder="Segundo nombre">
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Primer apellido -->
                                    <div class="form-group row">
                                        <!-- <label for="surname" class="col-4 control-label">Primer apellido<i class="red">*</i></label> -->
                                        <div class="col-sm-12 col-md-6">
                                            <div class="lineb">
                                                <input type="text" name="surname" value="{{ old('surname') }}"
                                                    class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"
                                                    placeholder="Primer apellido*" required>

                                                @if ($errors->has('surname'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('surname') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Segundo apellido -->
                                        <div class="col-sm-12 col-md-6">
                                            <div class="lineb">
                                                <input type="text" name="second_surname"
                                                    value="{{ old('second_surname') }}" class="form-control"
                                                    placeholder="Segundo apellido">
                                            </div>
                                        </div>

                                    </div>


                                    <!-- Genero -->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="lineb">
                                                <div class="row">
                                                    <label for="gender" class="col-6 control-label">Género<i
                                                            class="red">*</i></label>
                                                    <div class="col-sm-6">
                                                        <select
                                                            class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                                            name="gender" required>
                                                            <option value="">Seleccione</option>
                                                            <option value="Femenino">Femenino</option>
                                                            <option value="Masculino">Masculino</option>
                                                            <option value="Otro">Otro</option>
                                                            @if(old('gender'))
                                                            <option value="{{ old('gender') }}" selected>
                                                                {{ old('gender') }}</option>
                                                            @endif
                                                        </select>

                                                        @if ($errors->has('gender'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('gender') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div> <!-- row -->
                                            </div> <!-- lineb -->
                                        </div> <!-- col -->
                                    </div> <!-- row -->

                                    <!-- Fecha de nacimiento -->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="lineb">
                                                <div class="row">
                                                    <label for="birthday" class="col-6 control-label">Fecha de
                                                        nacimiento<i class="red">*</i></label>
                                                    <div class="col-6">
                                                        <input type="date" name="birthday" value="{{ old('birthday') }}"
                                                            class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}"
                                                            required>
                                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                                            Para la inscripción debes tener entre 18 y 55 años.
                                                        </small>

                                                        @if ($errors->has('birthday'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('birthday') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div> <!-- row -->
                                            </div> <!-- lineb -->
                                        </div> <!-- col -->
                                    </div> <!-- row -->

                                    <!-- Identificación -->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="lineb">
                                                <div class="row">
                                                    <label for="document" class="col-5 control-label">Identificación<i
                                                            class="red">*</i></label>
                                                    <div class="col-sm-3">
                                                        <select
                                                            class="form-control{{ $errors->has('document_type') ? ' is-invalid' : '' }}"
                                                            name="document_type">
                                                            <option value="CC">CC</option>
                                                            <option value="NUIP">NUIP</option>
                                                            <option value="PA">PA</option>
                                                            <option value="CE">CE</option>
                                                            @if(old('document_type'))
                                                            <option value="{{ old('document_type') }}" selected>
                                                                {{ old('document_type') }}</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="document" value="{{ old('document') }}"
                                                            class="form-control{{ $errors->has('document') ? ' is-invalid' : '' }}"
                                                            required>

                                                        @if ($errors->has('document'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('document') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div> <!-- row -->
                                            </div> <!-- lineb -->
                                        </div> <!-- col -->
                                    </div> <!-- row -->

                                    <div class="form-group row">
                                        <label for="departamento">Departamento de residencia<span class="text-danger">
                                                *</span></label>
                                        <select v-model="departamento" v-on:change="c_departamento" class="form-control"
                                            name="departamento" id="departamento">


                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="municipio">Ciudad de residencia<span class="text-danger">
                                                *</span></label>
                                        <select v-model="ciudad" class="form-control" name="ciudad" id="ciudad">
                                        </select>
                                    </div>

                                    <!-- Telefono -->
                                    <div class="form-group row">
                                        <!-- <label for="phone" class="col-4 control-label">Teléfono</label> -->
                                        <div class="col-12">
                                            <div class="lineb">
                                                <input type="text" name="phone" value="{{ old('phone') }}"
                                                    class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                    placeholder="Celular*" required>

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
                                        <!-- <label for="email" class="col-4 control-label">Correo electrónico</label> -->
                                        <div class="col-12">
                                            <div class="lineb">
                                                <input type="email" name="email" value="{{ old('email') }}"
                                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                    placeholder="Correo electrónico">

                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Cómo te enteraste -->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="lineb">
                                                <div class="row">
                                                    <label for="como_conocio" class="col-6 control-label">¿Cómo te
                                                        enteraste?</label>
                                                    <div class="col-sm-6">
                                                        <select
                                                            class="form-control{{ $errors->has('como_conocio') ? ' is-invalid' : '' }}"
                                                            name="como_conocio">
                                                            <option value="">Seleccione</option>
                                                            <option value="Redes sociales">Redes sociales</option>
                                                            <option value="Página web">Página web</option>
                                                            <option value="Publicidad digital">Publicidad digital
                                                            </option>
                                                            <option value="Donando sangre">Donando sangre</option>
                                                            <option value="Referencia de un conocido">Referencia de un
                                                                conocido</option>
                                                            <option value="Pendón, folleto o tarjeta">Pendón, folleto o
                                                                tarjeta</option>
                                                            <option value="Información de otros registros">Información
                                                                de otros registros</option>
                                                            <option value="Televisión, periódicos o radio">Televisión,
                                                                periódicos o radio</option>
                                                            @if(old('como_conocio'))
                                                            <option value="{{ old('como_conocio') }}" selected>
                                                                {{ old('como_conocio') }}</option>
                                                            @endif
                                                        </select>

                                                        @if ($errors->has('como_conocio'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('como_conocio') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div> <!-- row -->
                                            </div> <!-- lineb -->
                                        </div> <!-- col -->
                                    </div> <!-- row -->

                                    <!-- Uso de datos -->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="uso_datos"
                                                    id="uso_datos" {{ old('uso_datos') ? 'checked' : '' }} required>

                                                <label class="form-check-label" for="uso_datos">
                                                    <a class="ml-2 proteccion-datos"
                                                        href="http://idcbis.org.co/pdf/pol%c3%adticatransparenciadelmanejodedatos.pdf"
                                                        target="_blank">Acepto la política de uso de datos*</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="boarding_place" value="IDCBIS">
                                    <input type="hidden" name="responsable" value="Pagina web">
                                    <input type="hidden" name="contact_source" value="Pagina web">
                                    <input type="hidden" name="contact_from" value="RNDCPH">

                                    <div class="form-group row">
                                        <div class="col-sm-10 offset-sm-4">
                                            <button type="submit" class="btn">Preinscribirme</button>
                                        </div>
                                    </div>

                                </form>

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
                                            <img class="img-fluid"
                                                src="{!! asset('img/logo_darcelulas_blanco_w.png') !!}" alt="">
                                        </picture>
                                    </a>
                                </div>
                                <div class="col-12 text-center mt-5">
                                    <a class="leer_siguiente" href="{!! route('tienesPreguntas') !!}">
                                        ¿Tienes preguntas? <span><i class="fas fa-caret-right"></i></span>
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
                    <h1>¡Quiero preinscribirme!</h1>
                </div>
            </div>

            <!-- Hoja 2 -->
            <div id="fondo_general_m" class="row align-items-center">
                <div class="col-12 text-center pt-3">
                    <h2 class="mb-3">¡Quiero preinscribirme!</h2>
                    <p>Registrarte como donante es una decisión muy importante, queremos saber que estás totalmente
                        seguro, si es así por favor confirmalo en el formulario.</p>
                    <img class="img-fluid" src="{!! asset('img/conoce_el_registro/imagen_preinscripcion.png') !!}"
                        alt="DarCelulas">
                </div>
                <div class="col-12 pb-3">
                    <form class="form-horizontal form-inscripcion" action="{!! route('postNewDonor') !!}" method="post">

                        {{ csrf_field() }}

                        <!-- Primer nombre -->
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="lineb">
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="Primer nombre*">

                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Segundo nombre -->
                        <div class="form-group row">
                            <!-- <label for="second_name" class="col-4 control-label">Segundo nombre</label> -->
                            <div class="col-12">
                                <div class="lineb">
                                    <input type="text" name="second_name" value="{{ old('second_name') }}"
                                        class="form-control" placeholder="Segundo nombre">
                                </div>
                            </div>
                        </div>

                        <!-- Primer apellido -->
                        <div class="form-group row">
                            <!-- <label for="surname" class="col-4 control-label">Primer apellido<i class="red">*</i></label> -->
                            <div class="col-12">
                                <div class="lineb">
                                    <input type="text" name="surname" value="{{ old('surname') }}"
                                        class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"
                                        placeholder="Primer apellido*">

                                    @if ($errors->has('surname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Segundo apellido -->
                        <div class="form-group row">
                            <!-- <label for="second_surname" class="col-4 control-label">Segundo apellido</label> -->
                            <div class="col-12">
                                <div class="lineb">
                                    <input type="text" name="second_surname" value="{{ old('second_surname') }}"
                                        class="form-control" placeholder="Segundo apellido">
                                </div>
                            </div>
                        </div>

                        <!-- Genero -->
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="lineb">
                                    <div class="row">
                                        <label for="gender" class="col-6 control-label">Género<i
                                                class="red">*</i></label>
                                        <div class="col-sm-6">
                                            <select
                                                class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                                name="gender">
                                                <option value="">Seleccione</option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Otro">Otro</option>
                                                @if(old('gender'))
                                                <option value="{{ old('gender') }}" selected>{{ old('gender') }}
                                                </option>
                                                @endif
                                            </select>

                                            @if ($errors->has('gender'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- lineb -->
                            </div> <!-- col -->
                        </div> <!-- row -->

                        <!-- Fecha de nacimiento -->
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="lineb">
                                    <div class="row">
                                        <label for="birthday" class="col-6 control-label">Fecha de nacimiento<i
                                                class="red">*</i></label>
                                        <div class="col-6">
                                            <input type="date" name="birthday" value="{{ old('birthday') }}"
                                                class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}">
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                Para la inscripción debes tener entre 18 y 55 años.
                                            </small>

                                            @if ($errors->has('birthday'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('birthday') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- lineb -->
                            </div> <!-- col -->
                        </div> <!-- row -->

                        <!-- Identificación -->
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="lineb">
                                    <div class="row">
                                        <label for="document" class="col-5 control-label">Identificación<i
                                                class="red">*</i></label>
                                        <div class="col-sm-3">
                                            <select
                                                class="form-control{{ $errors->has('document_type') ? ' is-invalid' : '' }}"
                                                name="document_type">
                                                <option value="CC">CC</option>
                                                <option value="NUIP">NUIP</option>
                                                <option value="PA">PA</option>
                                                <option value="CE">CE</option>
                                                @if(old('document_type'))
                                                <option value="{{ old('document_type') }}" selected>
                                                    {{ old('document_type') }}</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="document" value="{{ old('document') }}"
                                                class="form-control{{ $errors->has('document') ? ' is-invalid' : '' }} mt-3"
                                                placeholder="Número de identificación">

                                            @if ($errors->has('document'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('document') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- lineb -->
                            </div> <!-- col -->
                        </div> <!-- row -->

                        <!-- Telefono -->
                        <div class="form-group row">
                            <!-- <label for="phone" class="col-4 control-label">Teléfono</label> -->
                            <div class="col-12">
                                <div class="lineb">
                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                        class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                        placeholder="Celular*" required>

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
                            <!-- <label for="email" class="col-4 control-label">Correo electrónico</label> -->
                            <div class="col-12">
                                <div class="lineb">
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        placeholder="Correo electrónico">

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>



                        <!-- Cómo te enteraste -->
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="lineb">
                                    <div class="row">
                                        <label for="como_conocio" class="col-6 control-label">¿Cómo te
                                            enteraste?</label>
                                        <div class="col-sm-6">
                                            <select
                                                class="form-control{{ $errors->has('como_conocio') ? ' is-invalid' : '' }}"
                                                name="como_conocio">
                                                <option value="">Seleccione</option>
                                                <option value="Redes sociales">Redes sociales</option>
                                                <option value="Página web">Página web</option>
                                                <option value="Publicidad digital">Publicidad digital</option>
                                                <option value="Donando sangre">Donando sangre</option>
                                                <option value="Referencia de un conocido">Referencia de un conocido
                                                </option>
                                                <option value="Pendón, folleto o tarjeta">Pendón, folleto o tarjeta
                                                </option>
                                                <option value="Información de otros registros">Información de otros
                                                    registros</option>
                                                <option value="Televisión, periódicos o radio">Televisión, periódicos o
                                                    radio</option>
                                                @if(old('como_conocio'))
                                                <option value="{{ old('como_conocio') }}" selected>
                                                    {{ old('como_conocio') }}</option>
                                                @endif
                                            </select>

                                            @if ($errors->has('como_conocio'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('como_conocio') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- lineb -->
                            </div> <!-- col -->
                        </div> <!-- row -->

                        <!-- Uso de datos -->
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="uso_datos" id="uso_datos"
                                        {{ old('uso_datos') ? 'checked' : '' }} required>

                                    <label class="form-check-label" for="uso_datos">
                                        <a class="ml-2 proteccion-datos"
                                            href="http://idcbis.org.co/pdf/pol%c3%adticatransparenciadelmanejodedatos.pdf"
                                            target="_blank">Acepto la política de uso de datos*</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="boarding_place" value="IDCBIS">
                        <input type="hidden" name="responsable" value="Pagina web">
                        <input type="hidden" name="contact_source" value="Pagina web">
                        <input type="hidden" name="contact_from" value="RNDCPH">

                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-4">
                                <button type="submit" class="btn">Preinscribirme</button>
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
                    <a class="leer_siguiente" href="{!! route('tienesPreguntas') !!}">
                        ¿Tienes preguntas?
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{!! asset('js/quienesSomos.js') !!}"></script>
<!-- Validación del form -->
<script type="text/javascript">
var forms = document.getElementsByTagName('form');
for (var i = 0; i < forms.length; i++) {
    forms[i].noValidate = true;

    forms[i].addEventListener('submit', function(event) {
        if (!event.target.checkValidity()) {
            event.preventDefault();
            alert('Los campos marcados con * son obligatorios');
        }
    }, false);
}
</script>
@endsection