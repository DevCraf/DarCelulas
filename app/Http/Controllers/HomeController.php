<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscripcion;
use App\Tracing;
use App\Http\Requests\TracingRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrador.getDonors');
    }

    public function checkProteccion(){
      return view('administrador.checkProteccion');
    }

    public function getNewDonor(){
      return view('administrador.getNewDonor');
    }

    public function getDonorState(){
      return view('administrador.getDonorState');
    }

    public function agendaInscripciones(){
      $inscripciones = Inscripcion::all();
      return view('administrador.agenda', compact('inscripciones'));
    }

    public function noAgendados() {
      return view('administrador.noAgendados');
    }

    public function postNoAgendados(TracingRequest $request) {
      $tracing = new Tracing;

      $tracing->fill($request->all());
      $tracing->save();

      return \Redirect::back()->with('success', 'Actualización agregada');
      
    }

}
