<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
     protected $guarded = [];

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

     public function traerIdRegistroCRM($id){
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
       $result = json_decode($result, TRUE);

       return $result['data'][0]['id'];
     }

    public function editDonor($request){

      $token = $this->getAccessToken();
      $id = $this->traerIdRegistroCRM($request['identificacion']);
      $url = 'https://www.zohoapis.com/crm/v2/Contacts/'.$id;

      $data = [
        "data" => [
          [
            "Department" => (isset($request['departamento'])) ? $request['departamento'] : 'Bogotá D.C.',
            "Ciudad" => (isset($request['ciudad'])) ? $request['ciudad'] : 'Bogotá D.C.',
            "Fecha_inscripci_n" => (isset($request['fecha_inscripcion'])) ? $request['fecha_inscripcion'] : '',
            "Inscripci_n" => (isset($request['fecha_inscripcion'])) ? $request['fecha_inscripcion'] : '',
            "Jornada" => (isset($request['jornada'])) ? $request['jornada'] : '',
          ]
        ]
      ];

      $postdata = json_encode($data);

      $options = array(
        'http' => array(
          'method'  => 'PUT',
          'header'=>"Content-type: application/json\r\n" .
                    "Authorization: Zoho-oauthtoken ".$token."\r\n",
          'content' => $postdata
        )
      );
      $context  = stream_context_create($options);

      $result = file_get_contents($url, false, $context);
      if ($result === FALSE) {
        return false;
      }
      $result = json_decode($result, TRUE);
      return $result;

    }
}
