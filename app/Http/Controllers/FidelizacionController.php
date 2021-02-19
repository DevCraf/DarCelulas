<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fidelizacion;

class FidelizacionController extends Controller
{
  public function evaluacionServicio(){
    return view('fidelizacion.evaluacion');
  }

  public function postEvaluacionServicio(Request $request){
    $fid = new Fidelizacion;
    $fid->fill($request->input());
    $fid->save();
    return \Redirect::Route('graciasPorTuParticipacion');
  }

  public function graciasPorTuParticipacion(){
    return view('fidelizacion.gracias');
  }
}
