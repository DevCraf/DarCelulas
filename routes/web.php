<?php

// Route::get('/', function () {return view('welcome');});

Route::get('/', 'MenuController@inicio')->name('inicio');

Route::get('conoce-el-registro/quienes-somos', 'MenuController@quienesSomos')->name('quienesSomos');
Route::get('conoce-el-registro/objetivos', 'MenuController@objetivos')->name('objetivos');

Route::get('sobre-la-donacion/que-son-celulas-formadoras-de-sagre', 'MenuController@queSonLasCFS')->name('queSonLasCFS');
Route::get('sobre-la-donacion/como-puedes-darcelulas', 'MenuController@comoPuedesDarCelulas')->name('comoPuedesDarCelulas');
Route::get('sobre-la-donacion/que-pasa-al-darcelulas', 'MenuController@quePasaDespuesDarCelulas')->name('quePasaDespuesDarCelulas');
Route::get('sobre-la-donacion/compromisos-como-donante', 'MenuController@compromisosComoDonante')->name('compromisosComoDonante');
Route::get('preinscribete', 'MenuController@quieroInscribirme')->name('quieroInscribirme');
Route::get('tienes-preguntas', 'MenuController@tienesPreguntas')->name('tienesPreguntas');
Route::get('recursos-educativos', 'MenuController@recursosEducativos')->name('recursosEducativos');
Route::get('gracias-por-inscribirte', 'MenuController@graciasPorInscribirte')->name('graciasPorInscribirte');
Route::get('gracias-por-contactarnos', 'MenuController@graciasPorContactarnos')->name('graciasPorContactarnos');

// Preguntas frecuentes
Route::get('tienes-preguntas/preinscrito-en-ciudad-diferente', 'MenuController@preinscritoEnCiudadDiferente')->name('preinscritoEnCiudadDiferente');

// Noticias
Route::get('articulos', 'MenuController@noticias')->name('noticias');
Route::get('articulos/la-sangre-de-cordon-umbilical-ademas-de-dar-vida-puede-salvar-otras', 'MenuController@laSangreDeCordonUmbilicalAdemasDeDarVidaPuedeSalvarOtras')->name('laSangreDeCordonUmbilicalAdemasDeDarVidaPuedeSalvarOtras');
Route::get('articulos/en-donde-viven-las-celulas-formadoras-de-la-sangre', 'MenuController@enDondeVivenLasCelulasFormadorasDeLaSangre')->name('enDondeVivenLasCelulasFormadorasDeLaSangre');
Route::get('articulos/para-salvar-vidas-primero-hay-que-proteger-la-propia', 'MenuController@paraSalvarVidasPrimeroHayQueProtegerLaPropia')->name('paraSalvarVidasPrimeroHayQueProtegerLaPropia');
Route::get('articulos/conociendo-el-hla', 'MenuController@conociendoElHla')->name('conociendoElHla');
Route::get('articulos/salvar-una-vida', 'MenuController@salvarUnaVida')->name('salvarUnaVida');
Route::get('articulos/be-the-match', 'MenuController@beTheMatch')->name('beTheMatch');

//Ciudades
Route::get('ciudades/barranquilla', 'MenuController@Barranquilla')->name('Barranquilla');
Route::get('ciudades/medellin', 'MenuController@Medellin')->name('Medellin');
Route::get('ciudades/cali', 'MenuController@Cali')->name('Cali');
Route::get('ciudades/bogota', 'MenuController@Bogota')->name('Bogota');
Route::get('ciudades/otras', 'MenuController@Otras')->name('Otras');
Route::get('ciudades/test-kit-domicilio', 'MenuController@testKitDomicilio')->name('testKitDomicilio');
Route::get('ciudades/test-kit-domicilio-aprobado', 'MenuController@testKitDomicilioAprobado')->name('testKitDomicilioAprobado');

//Material Educativo
Route::get('material-educativo/buzones-autorizados', 'MenuController@buzonesAutorizados')->name('buzonesAutorizados');
Route::get('material-educativo/entrega-kit-domicilio', 'MenuController@entregaKitDomicilio')->name('entregaKitDomicilio');
Route::get('material-educativo/gracias-buzones', 'MenuController@graciasBuzones')->name('graciasBuzones');
Route::get('material-educativo/gracias-domicilio', 'MenuController@graciasDomicilio')->name('graciasDomicilio');
Route::get('asesoria-virtual', 'MenuController@asesoriaVirtual')->name('asesoriaVirtual');

// Videos
Route::get('videos', 'MenuController@videos')->name('videos');

// formulario de inscripci贸n
// Route::post('nuevo_donante', 'ZohoController@postNewDonor')->name('postNewDonor');

// Recursos recursos Educativos
Route::get('que-es-un-globulo-rojo', 'MenuController@globuloRojo')->name('globuloRojo');
Route::get('que-es-un-globulo-blanco', 'MenuController@globuloBlanco')->name('globuloBlanco');
Route::get('que-es-una-plaqueta', 'MenuController@plaqueta')->name('plaqueta');

// Administraci贸n
Auth::routes();
Route::get('donantes_inscritos', 'HomeController@index')->name('home');
Route::get('acepto_proteccion_de_datos', 'HomeController@checkProteccion')->name('checkProteccion');
Route::get('nuevo_donante', 'HomeController@getNewDonor')->name('getNewDonor');
Route::get('estado_del_donante', 'HomeController@getDonorState')->name('getDonorState');
Route::get('agenda_inscripciones', 'HomeController@agendaInscripciones')->name('agendaInscripciones');
Route::get('no_agendados', 'HomeController@noAgendados')->name('noAgendados');
Route::post('post_no_agendados', 'HomeController@postNoAgendados')->name('postNoAgendados');
Route::get('crm_response', 'MenuController@getCrmResponse')->name('getCrmResponse');

// Zoho
Route::get('refresh_token', 'ZohoController@getRefreshToken')->name('getRefreshToken');
Route::get('access_token', 'ZohoController@getAccessToken')->name('getAccessToken');
Route::post('existe_registro_crm', 'ZohoController@existeRegistroCRM')->name('existeRegistroCRM');
Route::post('nuevo_donante_post', 'ZohoController@postNewDonor')->name('postNewDonor');

// Agenda inscripcion
Route::get('agenda_inscripcion', 'InscripcionController@agendaInscripcion')->name('agendaInscripcion');
Route::post('post_agenda_inscripcion', 'InscripcionController@postAgendaInscripcion')->name('postAgendaInscripcion');
Route::get('gracias-por-tu-respuesta', 'InscripcionController@graciasPorTuRespuesta')->name('graciasPorTuRespuesta');
Route::get('ha-ocurrido-un-error', 'InscripcionController@haOcurridoUnError')->name('haOcurridoUnError');

// Fidelizacion
Route::get('evaluacion_de_servicio', 'FidelizacionController@evaluacionServicio')->name('evaluacionServicio');
Route::post('post_evaluacion_de_servicio', 'FidelizacionController@postEvaluacionServicio')->name('postEvaluacionServicio');
Route::get('gracias-por-tu-participacion', 'FidelizacionController@graciasPorTuParticipacion')->name('graciasPorTuParticipacion');
// Route::get('ha-ocurrido-un-error', 'InscripcionController@haOcurridoUnError')->name('haOcurridoUnError');


// Pruebas
/* Route::get('test', 'ZohoController@test')->name('test'); */
// Route::get('prueba_agenda_inscripcion', 'InscripcionController@pruebaAgendaInscripcion')->name('pruebaAgendaInscripcion');
// Route::get('preinscribete_test', 'MenuController@quieroInscribirme_test')->name('quieroInscribirme_test');