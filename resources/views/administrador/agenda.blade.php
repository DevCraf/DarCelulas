@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('content')
  <div class="card">
      <div class="card-header">Agenda de inscripción</div>

      <div class="card-body">
        @if(Session::has('success'))
          <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('error'))
          <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
        @endif

        <div class="row">
          <div class="col">

            <table class="table">
              <tr>
                <th>Identificación</th>
                <th>Fecha</th>
                <th>Jornada</th>
              </tr>
              @foreach($inscripciones as $inscripcion)
              <tr>
                <td>{!! $inscripcion->identificacion !!}</td>
                <td>{!! $inscripcion->fecha_inscripcion !!}</td>
                <td>{!! $inscripcion->jornada !!}</td>
              </tr>
              @endforeach
            </table>

          </div>
        </div>

      </div>
  </div>
@endsection

@section('js')
  <script src="{{ asset('js/jquery.js')}}"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>
@endsection
