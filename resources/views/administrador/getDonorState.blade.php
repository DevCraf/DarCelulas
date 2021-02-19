@extends('layouts.app')

@section('content')
  <div class="card">
      <div class="card-header">Estado del donante</div>
      <div class="card-body">
        <!-- Mensajes del sistema -->
        @if(Session::has('existe_success'))
          <div class="alert alert-success" role="alert">{{ Session::get('existe_success') }}</div>
        @endif
        @if(Session::has('existe_error'))
          <div class="alert alert-danger" role="alert">{{ Session::get('existe_error') }}</div>
        @endif

        <form class="form-horizontal" action="{!! route('existeRegistroCRM') !!}" method="post">

          {{ csrf_field() }}

          <!-- Primer nombre -->
          <div class="form-group row">
            <label for="document" class="col-4 control-label">Identificación<i class="red">*</i></label>
            <div class="col-8">
              <input type="text" name="document" value="{{ old('document') }}" class="form-control{{ $errors->has('document') ? ' is-invalid' : '' }}">

              @if ($errors->has('document'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('document') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-10 offset-sm-4">
              <button type="submit" class="btn btn-success"><i class="fas fa-search mr-2"></i> Buscar</button>
            </div>
          </div>

        </form>
      </div>
  </div>
@endsection
