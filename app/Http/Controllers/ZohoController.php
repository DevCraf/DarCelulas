<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateIdentificationRequest;
use App\Http\Requests\CreateDonorRequest;

class ZohoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function getRefreshToken()
    {
      /**
       * Solo usar si se necesita crear un nuevo refresh token
       *
       * @return array
       */

      // $url = 'https://accounts.zoho.com/oauth/v2/token?';
      // $data = array('code' => $_ENV["ZOHO_GRANT"], 'redirect_uri' => $_ENV["ZOHO_URI"], 'client_id' => $_ENV["ZOHO_CLIENT"], 'client_secret' => $_ENV["ZOHO_SECRET"], 'grant_type' => 'authorization_code');
      // $options = array(
      //   'http' => array(
      //     'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      //     'method'  => 'POST',
      //     'content' => http_build_query($data)
      //   )
      // );
      // $context  = stream_context_create($options);
      // $result = file_get_contents($url, false, $context);
      // if ($result === FALSE) {
      //   return 'error';
      // }
      // dd($result);
    }

    public function getAccessToken(){
      $url = 'https://accounts.zoho.com/oauth/v2/token?';
      $data = array('refresh_token' => $_ENV["ZOHO_REFRESH"], 'client_id' => $_ENV["ZOHO_CLIENT"], 'client_secret' => $_ENV["ZOHO_SECRET"], 'grant_type' => 'refresh_token');
      $options = array(
        'http' => array(
          'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
          'method'  => 'POST',
          'content' => http_build_query($data)
        )
      );
      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);
      if ($result === FALSE) {
        return 'error';
      }
      $result = json_decode($result, TRUE);
      return $result['access_token'];
    }

    public function consultaRegistroCRM($id){
      $token = $this->getAccessToken();
      $url = 'https://www.zohoapis.com/crm/v2/Contacts/search?criteria=(Identificaci_n:equals:'.$id.')';
      $data = array();
      $options = array(
        'http' => array(
          'method'  => 'GET',
          'header'=>"Content-type: application/x-www-form-urlencoded\r\n" .
                    "Authorization: Zoho-oauthtoken ".$token."\r\n",
          'content' => http_build_query($data)
        )
      );
      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);
      if ($result == '') {
        return false;
      }
      return true;
    }

    public function existeRegistroCRM(CreateIdentificationRequest $request){
      $result = $this->consultaRegistroCRM($request->input('document'));
      if($result == true){
        return \Redirect::back()->with('existe_error', 'El usuario se encuentra pre-registrado');
      }
      else{
        return \Redirect::back()->with('existe_success', 'El usuario no se encuentra pre-registrado');
      }
    }

    public function postNewDonor(CreateDonorRequest $request){


      $result = $this->consultaRegistroCRM($request->input('document'));

      if($result == true){
        return \Redirect::back()->with('existe_error', 'El usuario se encuentra preregistrado');
      }
      else{
        $token = $this->getAccessToken();
        $url = 'https://www.zohoapis.com/crm/v2/Contacts';

        $data = [
          "data" => [
            [
              "Lugar_de_preinscripcion" => $request->input('boarding_place'),
              "First_Name" => $request->input('name') .' '. $request->input('second_name'),
              "Last_Name" => $request->input('surname') .' '. $request->input('second_surname'),
              "Sexo" => $request->input('gender'),
              "Date_of_Birth" => $request->input('birthday'),
              "Tipo_documento" => $request->input('document_type'),
              "Identificaci_n" => $request->input('document'),
              "Celular" => $request->input('phone'),
              "Email" => $request->input('email'),
              "Responsable_del_abordaje" => $request->input('responsable'),
              "Lead_Source" => $request->input('contact_source'),
              "Contacto_de" => $request->input('contact_from'),
              "Nos_conocio_por" => $request->input('como_conocio'),
              "Owner" => [
                "name" => "Dar Células darcelulas",
                "id" => "3347306000002464001"
              ]
            ]
          ]
        ];

        $postdata = json_encode($data);

        $options = array(
          'http' => array(
            'method'  => 'POST',
            'header'=>"Content-type: application/json\r\n" .
                      "Authorization: Zoho-oauthtoken ".$token."\r\n",
            'content' => $postdata
          )
        );
        $context  = stream_context_create($options);

        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) {
          return \Redirect::back()->with('error', 'Se presento un problema con el registro, por favor intentelo de nuevo.');
        }
        $result = json_decode($result, TRUE);

        if ($result['data'][0]['code'] == 'SUCCESS') {
          // Redirect front y administracion
          if ($request->input('contact_source') === 'RNDCPH - Sensibilización') {
            return \Redirect()->route('home')->with('success', 'El usuario fue pre-registrado con éxito');
          }
          else{
            return \Redirect()->route('graciasPorInscribirte');
          }
        }
        else{
          return \Redirect::back()->with('error', 'Se presento un problema con el registro, por favor confirme la inscripción en la opción "Ver estado del donante".');
        }
      }
    }

    public function test(){
      return 'ok';
    }
}
