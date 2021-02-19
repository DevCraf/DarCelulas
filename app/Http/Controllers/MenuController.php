<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function quienesSomos()
    {
        return view('conoce-el-registro.quienesSomos');
    }

    public function objetivos()
    {
        return view('conoce-el-registro.objetivos');
    }

    public function queSonLasCFS()
    {
        return view('sobre-la-donacion.queSonLasCFS');
    }

    public function comoPuedesDarCelulas()
    {
        return view('sobre-la-donacion.comoPuedesDarCelulas');
    }

    public function quePasaDespuesDarCelulas()
    {
        return view('sobre-la-donacion.quePasaDespuesDarCelulas');
    }

    public function compromisosComoDonante()
    {
        return view('sobre-la-donacion.compromisosComoDonante');
    }

    public function quieroInscribirme()
    {
        return view('quieroInscribirme');
    }

    public function tienesPreguntas()
    {
        return view('tienesPreguntas');
    }

    public function recursosEducativos()
    {
        return view('recursosEducativos');
    }

    public function noticias()
    {
        return view('noticias');
    }

    public function getCrmResponse()
    {
        return 'ok';
    }

    // Recursos recursosEducativos

    public function globuloRojo()
    {
        return view('recursos-educativos.globuloRojo');
    }

    public function globuloBlanco()
    {
        return view('recursos-educativos.globuloBlanco');
    }

    public function plaqueta()
    {
        return view('recursos-educativos.plaqueta');
    }

    public function graciasPorInscribirte()
    {
        return view('gracias_por_inscribirte');
    }

    public function graciasPorContactarnos()
    {
        return view('gracias_por_contactarnos');
    }

    // videos

    public function videos()
    {
        return view('videos');
    }

    // Preguntas frecuentes

    public function preinscritoEnCiudadDiferente()
    {
        return view('faq.preinscrito-en-ciudad-diferente');
    }

    // noticias

    public function laSangreDeCordonUmbilicalAdemasDeDarVidaPuedeSalvarOtras()
    {
        return view('articulos.la_sangre_de_cordon_umbilical');
    }

    public function enDondeVivenLasCelulasFormadorasDeLaSangre()
    {
        return view('articulos.en_donde_viven_las_celulas_formadoras_de_la_sangre');
    }

    public function paraSalvarVidasPrimeroHayQueProtegerLaPropia()
    {
        return view('articulos.para_salvar_vidas_primero_hay_que_proteger_la_propia');
    }

    public function conociendoElHla()
    {
        return view('articulos.conociendo_el_hla');
    }

    public function salvarUnaVida()
    {
        return view('articulos.entrevista');
    }

    public function beTheMatch()
    {
        return view('articulos.bethematch');
    }

    public function Barranquilla()
    {
        return view('ciudades.barranquilla');
    }

    public function Medellin()
    {
        return view('ciudades.medellin');
    }

    public function Cali()
    {
        return view('ciudades.cali');
    }

    public function Bogota()
    {
        return view('ciudades.bogota');
    }

    public function Otras()
    {
        return view('ciudades.otras');
    }

    public function testKitDomicilio()
    {
        return view('ciudades.test-kit-domicilio');
    }

    public function testKitDomicilioAprobado()
    {
        return view('ciudades.test-kit-domicilio-aprobado');
    }

    public function buzonesAutorizados()
    {
        return view('material-educativo.buzones-autorizados');
    }

    public function entregaKitDomicilio()
    {
        return view('material-educativo.entrega-kit-domicilio');
    }

    public function graciasDomicilio()
    {
        return view('material-educativo.gracias-domicilio');
    }

    public function graciasBuzones()
    {
        return view('material-educativo.gracias-buzones');
    }

    public function asesoriaVirtual()
    {
        return view('asesoria-virtual');
    }

    public function pruebas()
    {
        $url = 'http://idcbisdesk:8080/nuxeo/api/v1/path/default-domain';
        $data = array();
        $options = array(
            'http' => array(
                'method'  => 'GET',
                'header' => "Content-type: application/x-www-form-urlencoded\r\n" .
                    "Authorization: Administrator:Administrator",
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        dd($result);
    }

    public function quieroInscribirme_test()
    {
        return view('quieroInscribirme_test');
    }
}
