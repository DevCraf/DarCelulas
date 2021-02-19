@extends('layouts.app')

@section('content')
  <div class="card">
      <div class="card-header">Donantes inscritos</div>

      <div class="card-body">
        @if(Session::has('success'))
          <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('error'))
          <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
        @endif

        <div class="row">
          <div class="col">
            <a class="btn btn-success float-right mb-3" href="{!! route('checkProteccion') !!}"><i class="fas fa-plus mr-2"></i>Nuevo Donante</a>
          </div>
        </div>

        <!-- <div class="row">
          <div class="col">
            <img class="img-fluid" src="{!! asset('img/demo_grafica.PNG') !!}" alt="">
          </div>
        </div> -->

        <div class="row">
          <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="img-fluid" src="{!! asset('img/demo_slide1.png') !!}" alt="">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="{!! asset('img/demo_slide2.png') !!}" alt="">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>

      </div>
  </div>
@endsection
