<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\dondeVives;
use App\Departamento;
use App\Municipio;
use App\Inscripcion;
use App\User;

class InscripcionController extends Controller
{

  public function validarExistenciaDonanteCRM($id){
    $inscripcion = new Inscripcion;
    $result = $inscripcion->consultaRegistroCRM($id);
    return $result;
  }

  public function actualizarDonante($request){
    $inscripcion = new Inscripcion;
    return $inscripcion->editDonor($request);
  }

  public function agendaInscripcion(){
    $departamentos = Departamento::Select('nombre', 'codigo')->orderBy('nombre')->get();
    $municipios = Municipio::all();
    return view('inscripcion.agenda_inscripcion', compact('departamentos', 'municipios'));
  }

  public function postAgendaInscripcion(Request $request){
    // Validar si el donante ya contesto la encuesta
    $donante = Inscripcion::where('identificacion', $request->identificacion)->first();
    // Si no ha contestado la encuesta
    if (!isset($donante)) {
      // Validar si el donante se encuentra preresgistrado
      // Si se encuentra preregistrado
      if($this->validarExistenciaDonanteCRM($request->identificacion) == true){

        if ($request->vives_bogota == 'No') {

          $inscripcion = new Inscripcion;
          $inscripcion->fill($request->all());
          $inscripcion->save();

          if ($this->actualizarDonante($request->all()) != false) {
            return view('faq.preinscrito-en-ciudad-diferente');
          }
          else{
            \Session::flash('mensaje', '<p><b>Se ha presentado un error.</b> por favor vuelve a intentarlo</p>');
            return \Redirect::route('haOcurridoUnError');
          }

        }
        else{
          if ($request->has_donado == 'No') {

            $inscripcion = new Inscripcion;
            $inscripcion->fill($request->all());
            $inscripcion->save();

            if ($this->actualizarDonante($request->all()) != false) {
              return view('inscripcion.gracias-por-inscripcion', compact('inscripcion'));
            }
            else{
              \Session::flash('mensaje', '<p><b>Se ha presentado un error.</b> por favor vuelve a intentarlo</p>');
              return \Redirect::route('haOcurridoUnError');
            }

          }
          else{

            $inscripcion = new Inscripcion;
            $inscripcion->fill($request->all());
            $inscripcion->save();

            if ($this->actualizarDonante($request->all()) != false) {
              return view('inscripcion.gracias-por-inscripcion', compact('inscripcion'));
            }
            else{
              \Session::flash('mensaje', '<p><b>Se ha presentado un error.</b> por favor vuelve a intentarlo</p>');
              return \Redirect::route('haOcurridoUnError');
            }

          }
        }
      }
      // Si no se encuentra preregistrado
      \Session::flash('mensaje', '<p><b>No se encuentra un usuario registrado con este documento.</b> Por favor confirma el número de identificación o has tu preinscripción en: https://idcbis.org.co/darcelulas/preinscribete</p>');
      return \Redirect::route('haOcurridoUnError');
    }

    // Mensaje si ya contesto la encuesta
    \Session::flash('mensaje', '<p><b>Solo puedes diligenciar la encuesta una vez.</b> Si tienes problemas con tu inscripción escríbenos a: captacionregistro@idcbis.org.co o puedes comunicarte al: (57+1) 364 9620 Ext. 9447</p>');
    return \Redirect::route('haOcurridoUnError');
  }

  public function graciasPorTuRespuesta(){
    return view('inscripcion.gracias-por-inscripcion');
  }

  public function haOcurridoUnError(){
    return view('inscripcion.ha-ocurrido-un-error');
  }

  public function pruebaAgendaInscripcion(){
    $departamentos = Departamento::Select('nombre', 'codigo')->orderBy('nombre')->get();
    $municipios = Municipio::all();
    return view('inscripcion.prueba_agenda_inscripcion', compact('departamentos', 'municipios'));
  }


}
