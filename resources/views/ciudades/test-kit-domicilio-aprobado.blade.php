@extends('layouts.internas')

@section('styles')
<link rel="stylesheet" href="{!! asset('css/styles_scroll.css') !!}">  
@endsection

@section('content')
<!-- DESKTOP --> 
<div class="col-12">
  <div class="row justify-content-center">
          <h2>APROVADO ${S-S[T]}</h2>
          <iframe src="https://survey.zohopublic.com/zs/VeCNso" frameborder='0' style='height:1200px;width:100%;' marginwidth='0' marginheight='0' scrolling='auto'></iframe>
  </div>
</div>
@endsection
