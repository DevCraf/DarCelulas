@extends('layouts.internas')

@section('styles')
  <link rel="stylesheet" href="{!! asset('css/styles_scroll.css') !!}">
@endsection


@section('content')

<div class="container">
  <div id="app" class="row justify-content-center align-items-center my-5 pt-3">
    <!-- <div class="col-12 text-center mb-3">
      <h1>Queremos conocerte mejor</h1>
    </div> -->
    <div class="col-12 col-md-8">
      <p>Para mejorar nuestra atención queremos conocerte mejor, por eso las siguientes preguntas son muy importantes para nosotros. Esta encuesta es confidencial, voluntaria y anónima:</p>

      <p><b>Diligenciar este formulario te va a llevar menos de cinco minutos.</b></p>
      <!-- Validación de errores -->
      <div v-if="errors.length">
        <div class="alert alert-danger" role="alert">
          <p><b>Por favor verifica lo siguiente:</b></p>
          <ul>
            <li v-for="error in errors">@{{ error }}</li>
          </ul>
        </div>
      </div>

      <form @submit="checkForm" action="{!! route('postEvaluacionServicio') !!}" method="post">
        @csrf

        <div class="row">
          <!-- 1 -->
          <div class="col-12 col-md-6">
            <p><b>1.</b> Género<span class="text-danger"> *</span></p>

            <div class="form-group">
              <div class="form-check form-check-inline">
                <input v-model="genero" class="form-check-input" type="radio" id="genero_femenino" name="genero" value="Femenino">
                <label class="form-check-label" for="genero_femenino">Femenino</label>
              </div>

              <div class="form-check form-check-inline">
                <input v-model="genero" class="form-check-input" type="radio" id="genero_masculino" name="genero" value="Masculino">
                <label class="form-check-label" for="genero_masculino">Masculino</label>
              </div>
            </div>

          </div>

          <!-- 2 -->
          <div class="col-12 col-md-6">
            <p><b>2.</b> Edad<span class="text-danger"> *</span></p>

            <div class="form-group">
              <input v-model="edad" class="form-control" type="number" name="edad" >
            </div>
          </div>
        </div>

        <!-- 3 -->
        <p><b>3.</b> Nivel educativo<span class="text-danger"> *</span></p>

        <div class="form-group">
          <select v-model="nivel_educativo" class="form-control" id="nivel_educativo" name="nivel_educativo">
            <option value="Ninguno">Ninguno</option>
            <option value="Primaria">Primaria</option>
            <option value="Bachiller">Bachiller</option>
            <option value="Técnico o tecnólogo">Técnico o tecnólogo</option>
            <option value="Profesional">Profesional</option>
            <option value="Posgrado">Posgrado</option>
          </select>
        </div>

        <!-- 4 -->
        <p><b>4.</b> Ocupación<span class="text-danger"> *</span></p>

        <div class="form-group">
          <select v-model="ocupacion" class="form-control" id="ocupacion" name="ocupacion">
            <option value="Desempleado (a)">Desempleado (a)</option>
            <option value="Estudiante">Estudiante</option>
            <option value="Trabajo doméstico">Trabajo doméstico no remunerado (actividades del hogar, ama de casa)</option>
            <option value="Empleado (a)">Empleado (a)</option>
            <option value="Pensionado (a)">Pensionado (a) o Jubilado (a)</option>
          </select>
        </div>

        <!-- 5 -->
        <p><b>5.</b> Etnia<span class="text-danger"> *</span></p>

        <div class="form-group">
          <select v-model="etnia" class="form-control" id="etnia" name="etnia">
            <option value="Afrodescendiente">Afrodescendiente</option>
            <option value="Indigena">Indigena</option>
            <option value="Mestizo">Mestizo</option>
            <option value="Otro">Otro</option>
          </select>
        </div>

        <!-- 6 -->
        <p><b>6.</b> Estado civil<span class="text-danger"> *</span></p>

        <div class="form-group">
          <select v-model="estado_civil" class="form-control" id="estado_civil" name="estado_civil">
            <option value="Casado (a)">Casado (a)</option>
            <option value="En union libre">En union libre</option>
            <option value="Soltero (a)">Soltero (a)</option>
            <option value="Separado (a)">Separado (a)</option>
            <option value="Viudo (a)">Viudo (a)</option>
          </select>
        </div>

        <!-- 7 -->
        <div class="row">
          <div class="col-12 col-md-6">
            <p><b>7.</b> ¿Tiene hijos(as)?<span class="text-danger"> *</span></p>

            <div class="form-group">
              <div class="form-check form-check-inline">
                <input v-model="hijos" class="form-check-input" type="radio" id="hijos_si" name="hijos" value="si">
                <label class="form-check-label" for="hijos_si"><b>Si</b></label>
              </div>

              <div class="form-check form-check-inline">
                <input v-model="hijos" class="form-check-input" type="radio" id="hijos_no" name="hijos" value="no">
                <label class="form-check-label" for="hijos_no"><b>No</b></label>
              </div>
            </div>
          </div>

          <!-- 8 -->
          <div class="col-12 col-md-6">
            <p><b>8.</b> Estrato de residencia<span class="text-danger"> *</span></p>

            <div class="form-group">
              <select v-model="estrato" class="form-control" id="estrato" name="estrato">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- 9 -->
          <div class="col-12 col-md-6">
            <p><b>9.</b> ¿Se identifica con alguna religión?<span class="text-danger"> *</span></p>

            <div class="form-group">
              <div class="form-check form-check-inline">
                <input v-on:click="ver_religion = true" v-model="idf_religion" class="form-check-input" type="radio" id="si" name="idf_religion" value="si">
                <label class="form-check-label" for="si"><b>Si</b></label>
              </div>

              <div class="form-check form-check-inline">
                <input v-on:click="ver_religion = false" v-model="idf_religion" class="form-check-input" type="radio" id="no" name="idf_religion" value="no">
                <label class="form-check-label" for="no"><b>No</b></label>
              </div>
            </div>
          </div>

          <div v-show="ver_religion" class="col-12 col-md-6">
            <!-- 10 -->
            <p>¿Cuál?<span class="text-danger"> *</span></p>

            <div class="form-group">
              <input v-model="religion" class="form-control" type="text" name="religion" >
            </div>
          </div>
        </div>

        <!-- 11 -->
        <p><b>10.</b> ¿Ha participado de actividades de beneficencia o voluntariado?<span class="text-danger"> *</span></p>

        <div class="form-group">
          <div class="form-check form-check-inline">
            <input v-on:click="ver_voluntariado = true" v-model="voluntariado" class="form-check-input" type="radio" id="voluntariado_si" name="voluntariado" value="si">
            <label class="form-check-label" for="voluntariado_si"><b>Si</b></label>
          </div>

          <div class="form-check form-check-inline">
            <input v-on:click="ver_voluntariado = false" v-model="voluntariado" class="form-check-input" type="radio" id="voluntariado_no" name="voluntariado" value="no">
            <label class="form-check-label" for="voluntariado_no"><b>No</b></label>
          </div>
        </div>

        <!-- 12 -->
        <div v-show="ver_voluntariado">
          <p>¿Cuál?<span class="text-danger"> *</span></p>

          <div class="form-group">
            <input v-model="actividad_voluntariado" class="form-control" type="text" name="actividad_voluntariado" >
          </div>
        </div>

        <!-- 13 -->
        <p><b>11.</b> ¿Tiene algún familiar o amigo(a) que tenga o haya tenido enfermedades severas de la sangre (por ejemplo leucemia)?<span class="text-danger"> *</span></p>

        <div class="form-group">
          <div class="form-check form-check-inline">
            <input v-model="familiar" class="form-check-input" type="radio" id="familiar_si" name="familiar" value="si">
            <label class="form-check-label" for="familiar_si"><b>Si</b></label>
          </div>

          <div class="form-check form-check-inline">
            <input v-model="familiar" class="form-check-input" type="radio" id="familiar_no" name="familiar" value="no">
            <label class="form-check-label" for="familiar_no"><b>No</b></label>
          </div>
        </div>

        <!-- 14 -->
        <p><b>12.</b> Cuando usted escuchó por primera vez acerca de la posibilidad de convertirse en un donante de células progenitoras hematopoyéticas, ¿usted supo inmediatamente que quería ser un donante o necesitó tiempo para pensarlo?<span class="text-danger"> *</span></p>

        <div class="form-group">
          <select v-model="supo_inmediatamente" class="form-control" id="supo_inmediatamente" name="supo_inmediatamente">
            <option value="1">Supe inmediatamente que quería ser un donante</option>
            <option value="2">Lo pensé por un corto periodo de tiempo</option>
            <option value="3">Lo pensé cuidadosamente durante bastante tiempo</option>
            <option value="4">Todavía no he decidido si realmente seré un donante</option>
          </select>
        </div>

        <!-- 15 -->
        <p><b>13.</b> Si tras una búsqueda de donantes en el registro se encuentra que usted es compatible con alguien que necesita su donación de células progenitoras hematopoyéticas, ¿qué tan difícil piensa que sería para usted decidir si donar o no?<span class="text-danger"> *</span></p>

        <div class="form-group">
          <div class="form-check form-check-inline">
            <input v-model="decision" class="form-check-input" type="radio" id="decision_muy" name="decision" value="4">
            <label class="form-check-label" for="decision_muy"><b>Muy difícil</b></label>
          </div>

          <div class="form-check form-check-inline">
            <input v-model="decision" class="form-check-input" type="radio" id="decision_dificil" name="decision" value="3">
            <label class="form-check-label" for="decision_dificil"><b>Difícil</b></label>
          </div>

          <div class="form-check form-check-inline">
            <input v-model="decision" class="form-check-input" type="radio" id="decision_poco" name="decision" value="2">
            <label class="form-check-label" for="decision_poco"><b>Poco dificil</b></label>
          </div>

          <div class="form-check form-check-inline">
            <input v-model="decision" class="form-check-input" type="radio" id="decision_nada" name="decision" value="1">
            <label class="form-check-label" for="decision_nada"><b>Nada difícil</b></label>
          </div>
        </div>

        <!-- 16 -->
        <p><b>14.</b> ¿Cómo se sentiría si se encuentra que por alguna razón usted no podría ser donante ya sea por aféresis o por punción del hueso de la cadera?<span class="text-danger"> *</span></p>

        <div class="form-group">
          <select v-model="no_ser_donante" class="form-control" id="no_ser_donante" name="no_ser_donante">
            <option value="1">Muy decepcionado</option>
            <option value="2">Un poco decepcionado</option>
            <option value="3">Un poco aliviado</option>
            <option value="4">Muy aliviado</option>
          </select>
        </div>

        <!-- 17 -->
        <p><b>15.</b> Muchos donantes de células progenitoras hematopoyéticas tienen dudas y se preocupan por la donación a pesar incluso de haber pasado por la experiencia de ser donantes. ¿Qué tan preocupado está por la posibilidad de donar?<span class="text-danger"> *</span></p>

        <div class="form-group">
          <select v-model="dudas" class="form-control" id="dudas" name="dudas">
            <option value="4">Muy preocupado</option>
            <option value="3">Preocupado</option>
            <option value="2">Un poco preocupado</option>
            <option value="1">Ninguna preocupación</option>
          </select>
        </div>

        <h3 class="mt-5 mb-3"><b>Por favor indique su nivel de acuerdo con las siguientes afimaciones.</b></h3>

        <!-- 18 -->
        <p><b>16.</b> Realmente me gustaría donar células progenitoras hematopoyéticas, incluso si hay otro donante compatible tras la búsqueda en el registro<span class="text-danger"> *</span></p>

        <div class="form-group">
          <select v-model="me_gustaria_donar" class="form-control" id="me_gustaria_donar" name="me_gustaria_donar">
            <option value="1">Muy de acuerdo</option>
            <option value="2">De acuerdo</option>
            <option value="3">Un poco desacuerdo</option>
            <option value="4">Totalmente en desacuerdo</option>
          </select>
        </div>

        <!-- 19 -->
        <p><b>17.</b> A veces me siento inseguro acerca de la donación de células progenitoras hematopoyéticas <span class="text-danger"> *</span></p>

        <div class="form-group">
          <select v-model="inseguro" class="form-control" id="inseguro" name="inseguro">
            <option value="4">Muy de acuerdo</option>
            <option value="3">De acuerdo</option>
            <option value="2">Un poco desacuerdo</option>
            <option value="1">Totalmente  en desacuerdo</option>
          </select>
        </div>

        <!-- 20 -->
        <p><b>18.</b> Cuando pienso en la posibilidad de ser compatible con un paciente, a veces desearía que el paciente recibiera la donación de otra persona en lugar de mí. <span class="text-danger"> *</span></p>

        <div class="form-group">
          <select v-model="otra_persona" class="form-control" id="otra_persona" name="otra_persona">
            <option value="4">Muy de acuerdo</option>
            <option value="3">De acuerdo</option>
            <option value="2">Un poco desacuerdo</option>
            <option value="1">Totalmente  en desacuerdo</option>
          </select>
        </div>

        <h3 class="mt-5 mb-3"><b>Califica nuestro servicio.</b></h3>

        <!-- 21 -->
        <p><b>19.</b> La atención del personal del registro fue</p>

        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="atencion" id="19excelente" value="4">
            <label class="form-check-label" for="19excelente">Excelente</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="atencion" id="19buena" value="3">
            <label class="form-check-label" for="19buena">Buena</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="atencion" id="19regular" value="2">
            <label class="form-check-label" for="19regular">Regular</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="atencion" id="19deficiente" value="1">
            <label class="form-check-label" for="19deficiente">Deficiente</label>
          </div>
        </div>

        <!-- 22 -->
        <p><b>20.</b> La información suministrada por el personal que lo atendió fue</p>

        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="informacion" id="20excelente" value="4">
            <label class="form-check-label" for="20excelente">Excelente</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="informacion" id="20buena" value="3">
            <label class="form-check-label" for="20buena">Buena</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="informacion" id="20regular" value="2">
            <label class="form-check-label" for="20regular">Regular</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="informacion" id="20deficiente" value="1">
            <label class="form-check-label" for="20deficiente">Deficiente</label>
          </div>
        </div>

        <!-- 23 -->
        <p><b>21.</b> La actitud del personal del registro fue</p>

        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="actitud" id="21excelente" value="4">
            <label class="form-check-label" for="21excelente">Excelente</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="actitud" id="21buena" value="3">
            <label class="form-check-label" for="21buena">Buena</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="actitud" id="21regular" value="2">
            <label class="form-check-label" for="21regular">Regular</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="actitud" id="21deficiente" value="1">
            <label class="form-check-label" for="21deficiente">Deficiente</label>
          </div>
        </div>

        <!-- 24 -->
        <p><b>22.</b> El lenguaje utilizado del personal que lo acompañó fue</p>

        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="lenguaje" id="22excelente" value="4">
            <label class="form-check-label" for="22excelente">Excelente</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="lenguaje" id="22buena" value="3">
            <label class="form-check-label" for="22buena">Buena</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="lenguaje" id="22regular" value="2">
            <label class="form-check-label" for="22regular">Regular</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="lenguaje" id="22deficiente" value="1">
            <label class="form-check-label" for="22deficiente">Deficiente</label>
          </div>
        </div>

        <!-- 25 -->
        <p><b>23.</b> La resolución de dudas e inquietudes fue</p>
        
        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inquietudes" id="23excelente" value="4">
            <label class="form-check-label" for="23excelente">Excelente</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inquietudes" id="23buena" value="3">
            <label class="form-check-label" for="23buena">Buena</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inquietudes" id="23regular" value="2">
            <label class="form-check-label" for="23regular">Regular</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inquietudes" id="23deficiente" value="1">
            <label class="form-check-label" for="23deficiente">Deficiente</label>
          </div>
        </div>

        <!-- 26 -->
        <p><b>24.</b> La privacidad durante la entrevista para registrarse fue</p>

        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="privacidad" id="24excelente" value="4">
            <label class="form-check-label" for="24excelente">Excelente</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="privacidad" id="24buena" value="3">
            <label class="form-check-label" for="24buena">Buena</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="privacidad" id="24regular" value="2">
            <label class="form-check-label" for="24regular">Regular</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="privacidad" id="24deficiente" value="1">
            <label class="form-check-label" for="24deficiente">Deficiente</label>
          </div>
        </div>

        <!-- 27 -->
        <p><b>25.</b> La imagen que usted se lleva del registro es</p>

        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="imagen" id="25excelente" value="4">
            <label class="form-check-label" for="25excelente">Excelente</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="imagen" id="25buena" value="3">
            <label class="form-check-label" for="25buena">Buena</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="imagen" id="25regular" value="2">
            <label class="form-check-label" for="25regular">Regular</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="imagen" id="25deficiente" value="1">
            <label class="form-check-label" for="25deficiente">Deficiente</label>
          </div>
        </div>

        <!-- 28 -->
        <div class="row">
          <div class="col-12">
            <p><b>26.</b> ¿Cuántos minutos tardó el proceso de inscripción?</p>

            <div class="form-group">
              <input class="form-control" type="number" name="minutos" >
            </div>
          </div>
        </div>

        <!-- 29 -->
        <div class="row">
          <div class="col-12">
            <p><b>27.</b> ¿Tienes alguna sugerencia para mejorar nuestro servicio?</p>

            <div class="form-group">
              <textarea class="form-control" name="sugerencias" cols="30" rows="5"></textarea>              
            </div>
          </div>
        </div>

        <button class="btn btn_yellow float-right" type="submit">Enviar</button>

      </form>

    </div>

    <div v-if="errors.length">
      <div class="alert alert-danger" role="alert">
        <p><b>Por favor verifica lo siguiente:</b></p>
        <ul>
          <li v-for="error in errors">@{{ error }}</li>
        </ul>
      </div>
    </div>

  </div>
</div>


@endsection

@section('js')
<!-- development version -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pc-bootstrap4-datetimepicker@4.17/build/js/bootstrap-datetimepicker.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/pc-bootstrap4-datetimepicker@4.17/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<!-- Lastly add this package -->
<script src="https://cdn.jsdelivr.net/npm/vue-bootstrap-datetimepicker@5"></script>

<script>

  var _this = this;

  // Initialize as global component
  Vue.component('date-picker', VueBootstrapDatetimePicker);

  var app = new Vue({
    el: '#app',
    data: {
      genero: null,
      edad: null,
      nivel_educativo: null,
      ocupacion: null,
      etnia: null,
      estado_civil: null,
      hijos: null,
      idf_religion: null,
      religion: null,
      estrato: null,
      voluntariado: null,
      actividad_voluntariado: null,
      familiar: null,
      familiar_si: null,
      supo_inmediatamente: null,
      decision: null,
      ver_religion: false,
      ver_voluntariado: false,
      no_ser_donante: null,
      dudas: null,
      me_gustaria_donar: null,
      inseguro: null,
      otra_persona: null,
      errors: [],
    },
    methods: {
      checkForm: function(e){
        if(this.genero && this.edad && this.nivel_educativo && this.ocupacion && this.etnia && this.estado_civil && this.hijos && this.idf_religion && this.estrato && this.voluntariado && this.familiar && this.supo_inmediatamente && this.decision && this.no_ser_donante && this.dudas && this.me_gustaria_donar && this.inseguro && this.otra_persona){
          return true;
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
