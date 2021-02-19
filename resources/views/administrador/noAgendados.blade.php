@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">No agendados</div>

    <!-- Mensajes del sistema -->
    @if(Session::has('success'))
        <div class="alert alert-success m-4" role="alert">{{ Session::get('success') }}</div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
    @endif
    
    <div class="card-body">
        
        <div class="row">
            <div class="col">
                
                <form class="form-horizontal" id="form-noAgendados" action="{!! route('postNoAgendados') !!}" method="post">
                    
                    {{ csrf_field() }}

                    <div class="form-group row">
                        <label for="document" class="col-9 control-label">Número de identificación<i class="red">*</i></label>
                        <div class="col-3">
                            <input name="identificacion" type="text" class="form-control{{ $errors->has('identificacion') ? ' is-invalid' : '' }}">

                            @if ($errors->has('identificacion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('identificacion') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="document" class="col-9 control-label">¿Recuerda haber realizado su preinscripción en el programa DarCélulas del Registro Nacional de Donantes de Células Formadoras de la Sangre?<i class="red">*</i></label>
                        <div class="col-3">
                            <select name="recuerda_preinscripcion" v-model="recuerda_preinscripcion" class="form-control{{ $errors->has('recuerda_preinscripcion') ? ' is-invalid' : '' }}">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                            
                            @if ($errors->has('recuerda_preinscripcion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('recuerda_preinscripcion') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div v-if="recuerda_preinscripcion == 1">
                        <div class="form-group row">
                            <label for="document" class="col-9 control-label">¿Recuerda haber recibido un correo electrónico de bienvenida?</label>
                            <div class="col-3">
                                <select class="form-control" name="recuerda_correo" v-model="recuerda_correo">
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="document" class="col-9 control-label">¿Ha revisado su bandeja de SPAM?</label>
                            <div class="col-3">
                                <select class="form-control" name="recuerda_spam" v-model="recuerda_spam">
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="document" class="col-9 control-label">¿Recibió un mensaje de texto?</label>
                            <div class="col-3">
                                <select class="form-control" name="SMS" v-model="SMS">
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="document" class="col-12 control-label">¿Cuál es la principal razón por la que no agendó su cita de inscripción?</label>
                            <div class="col-12">
                                <select class="form-control" name="razon" v-model="razon">
                                    <option value="horario">Por el horario de atención</option>
                                    <option value="no-continuar">No desea continuar con el proceso</option>
                                    <option value="olvido">Lo olvidó</option>
                                    <option value="pospuso">Lo pospuso</option>
                                    <option value="proxima-donacion">Espera la próxima donación</option>
                                    <option value="pensando">Lo está pensando</option>
                                    <option value="no-informacion">No recibió la información</option>
                                    <option value="otra">Otra</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="document" class="col-12 control-label">Observaciones</label>
                        <div class="col-12">
                            <textarea class="form-control" name="observacion" v-model="observacion" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="document" class="col-9 control-label">¿Desea continuar con el proceso y agendar su cita?<i class="red">*</i></label>
                        <div class="col-3">
                            <select name="desea_continuar" v-model="desea_continuar" class="form-control{{ $errors->has('desea_continuar') ? ' is-invalid' : '' }}">
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>

                            @if ($errors->has('recuerda_preinscripcion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('recuerda_preinscripcion') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-4">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save mr-2"></i> Guardar</button>
                        </div>
                    </div>
                    
                </form>
                
            </div>
        </div>
        
    </div>
</div>
@endsection

@section('js')
<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!-- production version, optimized for size and speed -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script> -->

<script>
    var app = new Vue({
        el: '#form-noAgendados',
        data: {
            recuerda_preinscripcion: '',
            recuerda_correo: '',
            recuerda_spam: '',
            SMS: '',
            razon: '',
            observacion: '',
            desea_continuar: ''
        }
    })
</script>
@endsection