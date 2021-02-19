@extends('layouts.internas')

@section('styles')
  <link rel="stylesheet" href="{!! asset('css/styles_scroll.css') !!}">
@endsection


@section('content')

<div class="container">
  <div id="app" class="row justify-content-center align-items-center my-5 pt-3">
    <div class="col-12 text-center mb-3">
      <h1>Agenda tu inscripción</h1>
    </div>
    <div class="col-12 col-md-8">
      <p>Ya eres parte de los más de 1000 preinscritos en <b>DarCélulas</b> y para completar tu proceso debes agendar tu cita de  inscripción en el Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas.</p>
      <p>Es importante para nosotros que completes el siguiente cuestionario, ya que de estas respuestas dependerá el día a partir del cual puedes agendar tu visita al Banco Distrital de Sangre - IDCBIS, Carrera 32 # 12-81 Edificio IDCBIS, además podrás escoger la jornada (mañana o tarde) en la que completarás tu proceso de inscripción. Durante esta visita y a través de una donación de sangre ingresaremos tus datos de compatibilidad, esto te permitirá familiarizarte con los procedimientos de donación.</p>
      <!-- Validación de errores -->
      <div v-if="errors.length">
        <div class="alert alert-danger" role="alert">
          <p><b>Por favor verifica lo siguiente:</b></p>
          <ul>
            <li v-for="error in errors">@{{ error }}</li>
          </ul>
        </div>
      </div>

      <form @submit="checkForm" action="{!! route('postAgendaInscripcion') !!}" method="post">
        @csrf

        <!-- Identificación -->
        <p><b>¿Número de identificación?<span class="text-danger"> *</span></b></p>
        <div class="form-group">
          <input v-model="identificacion" class="form-control" type="number" name="identificacion" >
          <small id="passwordHelpBlock" class="form-text text-muted">
            Solo números sin puntos ni comas.
          </small>
        </div>

        <!-- Pregunta -->
        <p><b>¿Vives en Bogotá o alrededores?<span class="text-danger"> *</span></b></p>

        <div class="form-group">
          <div class="form-check form-check-inline">
            <input v-model="vives_bogota" class="form-check-input" type="radio" id="bogota_si" name="vives_bogota" value="Si">
            <label class="form-check-label" for="bogota_si">Si</label>
          </div>

          <div class="form-check form-check-inline">
            <input v-model="vives_bogota" class="form-check-input" type="radio" id="bogota_no" name="vives_bogota" value="No">
            <label class="form-check-label" for="bogota_no">No</label>
          </div>
        </div>

        <!-- Si no vives en Bogotá -->
        <template v-if="vives_bogota === 'No'">
          <p><b>¿Dónde vives?</b></p>

          <div class="form-group">
            <label for="departamento">Departamento<span class="text-danger"> *</span></label>
            <select v-model="departamento" v-on:change="c_departamento" class="form-control" name="departamento" id="departamento">
              @foreach($departamentos as $departamento)
              <option id="{!! $departamento->codigo !!}" value="{!! $departamento->nombre !!}">{!! $departamento->nombre !!}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="municipio">Ciudad<span class="text-danger"> *</span></label>
            <select v-model="ciudad" class="form-control" name="ciudad" id="ciudad">
              <option v-for="municipio in municipios" v-bind:value="municipio.nombre">@{{ municipio.nombre }}</option>
            </select>
          </div>
        </template>

        <!-- Si vives en Bogotá -->
        <template v-if="vives_bogota === 'Si'">
          <!-- Pregunta -->
          <p><b>¿Has donado sangre o plaquetas alguna vez?<span class="text-danger"> *</span></b></p>

          <div class="form-group">
            <div class="form-check form-check-inline">
              <input v-model="has_donado" class="form-check-input" type="radio" id="has_donado_si" name="has_donado" value="Si">
              <label class="form-check-label" for="has_donado_si">Si</label>
            </div>

            <div class="form-check form-check-inline">
              <input v-model="has_donado" class="form-check-input" type="radio" id="has_donado_no" name="has_donado" value="No">
              <label class="form-check-label" for="has_donado_no">No</label>
            </div>
          </div>

          <!-- No ha donado -->
          <template v-if="has_donado === 'No'">
            <!-- Pregunta -->
            <p><b>¿Por qué?</b></p>

            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="pq_nunca_lo_he_intentado" name="pq_nunca_lo_he_intentado">
                <label class="form-check-label" for="pq_nunca_lo_he_intentado">Nunca lo he intentado</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="pq_no_cumpli" name="pq_no_cumpli">
                <label class="form-check-label" for="pq_no_cumpli">No cumplí los criterios cuando lo intenté</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="pq_me_da_miedo" name="pq_me_da_miedo">
                <label class="form-check-label" for="pq_me_da_miedo">Me da miedo</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="pq_no_me_ha_interesado" name="pq_no_me_ha_interesado">
                <label class="form-check-label" for="pq_no_me_ha_interesado">No me ha interesado</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="pq_otro" name="pq_otro">
                <label class="form-check-label" for="pq_otro">Otro</label>
              </div>
            </div>

            <!-- Elegir la opción -->
            <p><b>Elige a continuación la fecha y jornada en la cual puedes acercarte al Banco Distrital de Sangre - IDCBIS, para culminar tu proceso de inscripción en el Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas<span class="text-danger"> *</span></b></p>
            <div class="form-group">
              <date-picker v-model="fecha_inscripcion_no" :config="options"></date-picker>
              <input type="hidden" name="fecha_inscripcion" v-bind:value="fecha_inscripcion_no">
            </div>

            <!-- Jornada -->
            <div class="form-group">
              <p><b>Jornada<span class="text-danger"> *</span></b></p>
              <select class="form-control" name="jornada">
                <option value="" selected="selected">Seleccione</option>
                <option value="mañana">Mañana - 8:00 a.m. a 12:00 m.</option>
                <option value="tarde">Tarde - 2:00 p.m. a 4:00 p.m.</option>
              </select>
            </div>

          </template>

          <!-- Si ha donado -->
          <template v-if="has_donado === 'Si'">
            <!-- Pregunta -->
            <p><b>¿Con qué frecuencia has donando en los últimos 12 meses?<span class="text-danger"> *</span></b></p>

            <div class="form-group">
              <!-- <label for="frecuencia_donacion" name="frecuencia_donacion">Example select</label> -->
              <select v-model="frecuencia_donacion" class="form-control" id="frecuencia_donacion" name="frecuencia_donacion">
                <option value="" selected="selected">Seleccione</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2 a 4">2 a 4</option>
                <option value="mas de 4">Más de 4</option>
              </select>
            </div>

            <!-- Pregunta -->
            <p><b>¿Cuál fue la fecha de tu última donación? (aproximada)<span class="text-danger"> *</span></b></p>
            <!-- DateTimePicker -->
            <div class="form-group">
              <date-picker v-model="ultima_donacion" :config="options_ultima_donacion"></date-picker>
              <input type="hidden" name="ultima_donacion" v-bind:value="ultima_donacion">
            </div>

            <!-- Pregunta -->
            <p><b>¿Qué tipo de donación realizaste?<span class="text-danger"> *</span></b></p>

            <div class="form-group">
              <select v-model="tipo_donacion" v-on:change="c_tipo_donacion" class="form-control" id="tipo_donacion" name="tipo_donacion">
                <option value="" selected="selected">Seleccione</option>
                <option value="sangre_total">Sangre total (solo sangre)</option>
                <option value="aferesis">Aféresis</option>
              </select>
            </div>

            <!-- Opciones fecha de inscripción -->
            <div>
              <p><b>Elige a continuación la fecha y jornada en la cual puedes acercarte al Banco Distrital de Sangre - IDCBIS, para culminar tu proceso de inscripción en el Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas<span class="text-danger"> *</span></b></p>
              <div class="form-group">
                <date-picker v-model="fecha_inscripcion_si" :config="options"></date-picker>
                <input type="hidden" name="fecha_inscripcion" v-bind:value="fecha_inscripcion_si">
              </div>
            </div>

            <!-- Jornada -->
            <div class="form-group">
              <p><b>Jornada<span class="text-danger"> *</span></b></p>
              <select class="form-control" name="jornada">
                <option value="" selected="selected">Seleccione</option>
                <option value="mañana">Mañana - 8:00 a.m. a 12:00 m.</option>
                <option value="tarde">Tarde - 2:00 p.m. a 4:00 p.m.</option>
              </select>
            </div>

          </template>  <!-- Última donación -->

        </template> <!-- Vives en Bogotá -->

        <template v-if="vives_bogota != 'Null'">
          <button class="btn btn_yellow float-right" type="submit">Siguiente</button>
        </template>

      </form>
    </div>
  </div>
</div>


@endsection

@section('js')
<!-- development version -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{!! asset('js/moment-es.js') !!}"></script>
<script src="https://cdn.jsdelivr.net/npm/pc-bootstrap4-datetimepicker@4.17/build/js/bootstrap-datetimepicker.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/pc-bootstrap4-datetimepicker@4.17/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<!-- Lastly add this package -->
<script src="https://cdn.jsdelivr.net/npm/vue-bootstrap-datetimepicker@5"></script>

<script>

  var _this = this;

  function diferencia_fecha(fecha){
    var hoy = new Date;
    hoy = moment(hoy);
    var validar = fecha - hoy;
    if (validar < 1) {
    // Enviando variables
      app.options.defaultDate = hoy.add(2, 'days').format("YYYY-MM-DD");
      app.options.minDate = hoy.add(2, 'days').format("YYYY-MM-DD");
    }
    else{
    //   // Enviando variables
      app.options.defaultDate = fecha.format("YYYY-MM-DD");
      app.options.minDate = fecha.format("YYYY-MM-DD");
    }
    return;
  }

  // Initialize as global component
  Vue.component('date-picker', VueBootstrapDatetimePicker);

  var app = new Vue({
    el: '#app',
    data: {
      identificacion: null,
      vives_bogota: null,
      has_donado: null,
      frecuencia_donacion: null,
      ultima_donacion: null,
      tipo_donacion: null,
      departamento: null,
      ciudad: null,
      municipios: '',
      todos_municipios: {!! json_encode($municipios) !!},
      ultima_donacion: null,
      fecha_inscripcion_no: null,
      fecha_inscripcion_si: null,      
      errors: [],
      options: {
        format: 'YYYY-MM-DD',
        inline: true,
        locale: moment.locale('es'),
        useCurrent: false,
        minDate: moment().add(2, 'days'),
        daysOfWeekDisabled: [0, 6],
        disabledDates: [
            moment("3/25/2019"),
            moment("4/18/2019"),
            moment("4/19/2019"),
            moment("5/1/2019"),
            moment("6/3/2019"),
            moment("6/24/2019"),
            moment("6/28/2019"),
            moment("7/1/2019"),
            moment("8/5/2019"),
            moment("8/7/2019"),
            moment("8/16/2019"),
            moment("8/19/2019"),
            moment("8/28/2019"),
            moment("9/18/2019"),
            moment("9/25/2019"),
            moment("10/2/2019"),
            moment("10/14/2019"),
            moment("10/31/2019"),
            moment("11/1/2019"),
            moment("11/4/2019"),
            moment("11/11/2019"),
            moment("11/21/2019"),
            moment("12/4/2019"),
            moment("12/13/2019"),
            moment("12/24/2019"),
            moment("12/25/2019"),
            moment("12/31/2019"),
            moment("5/3/2019"),
            moment("5/31/2019"),
          ]
      },
      options_ultima_donacion: {
        format: 'YYYY-MM-DD',
        inline: true,
        locale: moment.locale('es'),
        useCurrent: false,
      }
    },
    methods: {
      c_departamento: function(e){
        const result = this.todos_municipios.filter(municipio => municipio.nombreDepartamento == e.srcElement.value);
        this.municipios = result;
      },
      c_tipo_donacion: function(e){
        if (e.srcElement.value == "sangre_total") {
          // Sumando 3 meses
          fecha = moment(this.ultima_donacion).add(3, 'M');
        }
        else{
          // Sumando 3 meses
          fecha = moment(this.ultima_donacion).add(2, 'M');
        }
        // Llama funcion para comparar fechas
        _this.diferencia_fecha(fecha);
      },
       checkForm: function(e){
          if (this.identificacion && this.vives_bogota) {
            if(this.vives_bogota === 'No'){
              if (this.departamento && this.ciudad) {
                return true;
              }
              else{
                this.errors.push('Los campos marcado con * son obligatorios');
              }
            }
            else{
              if (this.has_donado == 'Si') {
                if (this.frecuencia_donacion && this.ultima_donacion && this.tipo_donacion && this.fecha_inscripcion_si) {
                  return true;
                }
                else{
                  this.errors.push('Los campos marcado con * son obligatorios');
                }
              }
              else if(this.has_donado == 'No'){
                if (this.fecha_inscripcion_no) {
                  return true;
                }
                else{
                  this.errors.push('Los campos marcado con * son obligatorios');
                }
              }
              else{
                this.errors.push('Los campos marcado con * son obligatorios');
              }
            }
          }
          else{
            this.errors.push('Los campos marcado con * son obligatorios');
          }
          e.preventDefault();
      }
    }
  });
</script>

@endsection
