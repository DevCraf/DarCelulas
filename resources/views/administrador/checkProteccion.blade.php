@extends('layouts.app')

@section('content')
  <div class="card">
      <div class="card-header">Protección de datos</div>

      <div class="card-body">

        <div class="col-12">

          <!-- Uso de datos -->
          <div class="form-group row">
              <div class="col-12">
                <p>¿Aceptas la política de uso de datos personales? <a href="https://idcbis.org.co/pdf/pol%c3%adticatransparenciadelmanejodedatos.pdf" target="_blank">Ver política</a></p>
                <a class="btn btn-success" href="{!! route('getNewDonor') !!}">Si</a>
                  <!-- <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="uso_datos" id="uso_datos">

                      <label class="form-check-label" for="uso_datos">
                          <a class="ml-2 proteccion-datos" href="http://idcbis.org.co/pdf/pol%c3%adticatransparenciadelmanejodedatos.pdf" target="_blank">Acepto la política de uso de datos*</a>
                      </label>
                  </div> -->
              </div>
          </div>

        </div>
      </div>
  </div>
@endsection
