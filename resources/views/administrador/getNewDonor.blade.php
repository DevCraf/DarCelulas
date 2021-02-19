@extends('layouts.app')

@section('content')
  <div class="card">
      <div class="card-header">Nuevo donante</div>

      <div class="card-body">
        <!-- Mensajes del sistema -->
        @if(Session::has('existe_success'))
          <div class="alert alert-success" role="alert">{{ Session::get('existe_success') }}</div>
        @endif
        @if(Session::has('existe_error'))
          <div class="alert alert-danger" role="alert">{{ Session::get('existe_error') }}</div>
        @endif

        <form class="form-horizontal" action="{!! route('postNewDonor') !!}" method="post">

          {{ csrf_field() }}

          <!-- Lugar del abordaje -->
          <div class="form-group row">
            <label for="boarding_place" class="col-4 control-label">Lugar del abordaje<i class="red">*</i></label>
            <div class="col-8">
              <select class="form-control{{ $errors->has('boarding_place') ? ' is-invalid' : '' }}" name="boarding_place">
                <option value="">Seleccione</option>
                <option value="IDCBIS" selected>IDCBIS</option>
                @if(old('boarding_place'))
                  <option value="{{ old('boarding_place') }}" selected>{{ old('boarding_place') }}</option>
                @endif
              </select>

              @if ($errors->has('boarding_place'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('boarding_place') }}</strong>
                </span>
              @endif

            </div>
          </div>

          <!-- Primer nombre -->
          <div class="form-group row">
            <label for="name" class="col-4 control-label">Primer nombre<i class="red">*</i></label>
            <div class="col-8">
              <input type="text" name="name" value="{{ old('name') }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">

              @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <!-- Segundo nombre -->
          <div class="form-group row">
            <label for="second_name" class="col-4 control-label">Segundo nombre</label>
            <div class="col-8">
              <input type="text" name="second_name" value="{{ old('second_name') }}" class="form-control">
            </div>
          </div>

          <!-- Primer apellido -->
          <div class="form-group row">
            <label for="surname" class="col-4 control-label">Primer apellido<i class="red">*</i></label>
            <div class="col-8">
              <input type="text" name="surname" value="{{ old('surname') }}" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}">

              @if ($errors->has('surname'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('surname') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <!-- Segundo apellido -->
          <div class="form-group row">
            <label for="second_surname" class="col-4 control-label">Segundo apellido</label>
            <div class="col-8">
              <input type="text" name="second_surname" value="{{ old('second_surname') }}" class="form-control">
            </div>
          </div>

          <!-- Genero -->
          <div class="form-group row">
            <label for="gender" class="col-4 control-label">Género<i class="red">*</i></label>
            <div class="col-sm-8">
              <select class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender">
                <option value="">Seleccione</option>
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
                <option value="Otro">Otro</option>
                @if(old('gender'))
                  <option value="{{ old('gender') }}" selected>{{ old('gender') }}</option>
                @endif
              </select>

              @if ($errors->has('gender'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('gender') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <!-- Fecha de nacimiento -->
          <div class="form-group row">
            <label for="birthday" class="col-4 control-label">Fecha de nacimiento<i class="red">*</i></label>
            <div class="col-8">
              <input type="date" name="birthday" value="{{ old('birthday') }}" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}">

              @if ($errors->has('birthday'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('birthday') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <!-- Identificación -->
          <div class="form-group row">
            <label for="document" class="col-4 control-label">Identificación<i class="red">*</i></label>
            <div class="col-sm-2">
              <select class="form-control{{ $errors->has('document_type') ? ' is-invalid' : '' }}" name="document_type">
                <option value="CC">CC</option>
                <option value="NUIP">NUIP</option>
                <option value="PA">PA</option>
                <option value="CE">CE</option>
                @if(old('document_type'))
                  <option value="{{ old('document_type') }}" selected>{{ old('document_type') }}</option>
                @endif
              </select>
            </div>
            <div class="col-sm-6">
              <input type="text" name="document" value="{{ old('document') }}" class="form-control{{ $errors->has('document') ? ' is-invalid' : '' }}">

              @if ($errors->has('document'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('document') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <!-- Telefono -->
          <div class="form-group row">
            <label for="phone" class="col-4 control-label">Teléfono</label>
            <div class="col-8">
              <input type="text" name="phone" value="{{ old('phone') }}" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}">

              @if ($errors->has('phone'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('phone') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <!-- Correo electrónico -->
          <div class="form-group row">
            <label for="email" class="col-4 control-label">Correo electrónico</label>
            <div class="col-8">
              <input type="email" name="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">

              @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <input type="hidden" name="responsable" value="{{ Auth::user()->company}}">
          <input type="hidden" name="contact_source" value="RNDCPH - Sensibilización">
          <input type="hidden" name="contact_from" value="RNDCPH">


          <div class="form-group row">
            <div class="col-sm-10 offset-sm-4">
              <button type="submit" class="btn btn-success"><i class="fas fa-plus mr-2"></i> Registrar</button>
            </div>
          </div>

        </form>
      </div>
  </div>
@endsection
