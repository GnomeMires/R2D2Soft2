<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::auth();

Route::get('/home', 'HomeController@index');



//persona Resources
/********************* persona ***********************************************/
Route::resource('persona','\R2D2Soft\Http\Controllers\PersonaController');
Route::post('persona/{id}/update','\R2D2Soft\Http\Controllers\PersonaController@update');
Route::get('persona/{id}/delete','\R2D2Soft\Http\Controllers\PersonaController@destroy');
Route::get('persona/{id}/deleteMsg','\R2D2Soft\Http\Controllers\PersonaController@DeleteMsg');
/********************* persona ***********************************************/


//datosempresa Resources
/********************* datosempresa ***********************************************/
Route::resource('datosempresa','\R2D2Soft\Http\Controllers\DatosempresaController');
Route::post('datosempresa/{id}/update','\R2D2Soft\Http\Controllers\DatosempresaController@update');
Route::get('datosempresa/{id}/delete','\R2D2Soft\Http\Controllers\DatosempresaController@destroy');
Route::get('datosempresa/{id}/deleteMsg','\R2D2Soft\Http\Controllers\DatosempresaController@DeleteMsg');
/********************* datosempresa ***********************************************/

//proovedor Resources
/********************* proovedor ***********************************************/
Route::resource('proovedor','\R2D2Soft\Http\Controllers\ProovedorController');
Route::post('proovedor/{id}/update','\R2D2Soft\Http\Controllers\ProovedorController@update');
Route::get('proovedor/{id}/delete','\R2D2Soft\Http\Controllers\ProovedorController@destroy');
Route::get('proovedor/{id}/deleteMsg','\R2D2Soft\Http\Controllers\ProovedorController@DeleteMsg');
/********************* proovedor ***********************************************/

//moto Resources
/********************* moto ***********************************************/
Route::resource('moto','\R2D2Soft\Http\Controllers\MotoController');
Route::post('moto/{id}/update','\R2D2Soft\Http\Controllers\MotoController@update');
Route::get('moto/{id}/delete','\R2D2Soft\Http\Controllers\MotoController@destroy');
Route::get('moto/{id}/deleteMsg','\R2D2Soft\Http\Controllers\MotoController@DeleteMsg');
/********************* moto ***********************************************/


//trabajomoto Resources
/********************* trabajomoto ***********************************************/
Route::resource('trabajomoto','\R2D2Soft\Http\Controllers\TrabajomotoController');
Route::post('trabajomoto/{id}/update','\R2D2Soft\Http\Controllers\TrabajomotoController@update');
Route::post('trabajomoto/{id}/imprimirRecibo','\R2D2Soft\Http\Controllers\TrabajomotoController@imprimirRecibo');
Route::get('trabajomoto/{id}/mostrarRecibo','\R2D2Soft\Http\Controllers\TrabajomotoController@mostrarRecibo');
Route::post('moto/showMotos','\R2D2Soft\Http\Controllers\MotoController@showMotos');
Route::get('trabajomoto/{id}/show','\R2D2Soft\Http\Controllers\TrabajomotoController@show');
Route::get('trabajomoto/{id}/updateEstado','\R2D2Soft\Http\Controllers\TrabajomotoController@updateEstado');
Route::get('trabajomoto/{id}/delete','\R2D2Soft\Http\Controllers\TrabajomotoController@destroy');
Route::get('trabajomoto/{id}/deleteMsg','\R2D2Soft\Http\Controllers\TrabajomotoController@DeleteMsg');

/********************* trabajomoto ***********************************************/


//fotosmoto Resources
/********************* fotosmoto ***********************************************/
Route::resource('fotosmoto','\R2D2Soft\Http\Controllers\FotosmotoController');
Route::get('fotosmoto/{id}/create','\R2D2Soft\Http\Controllers\FotosmotoController@create');
Route::get('fotosmoto/{id}/showFotos','\R2D2Soft\Http\Controllers\FotosmotoController@showFotos');
Route::post('fotosmoto/{id}/update','\R2D2Soft\Http\Controllers\FotosmotoController@update');
Route::get('fotosmoto/{id}/delete','\R2D2Soft\Http\Controllers\FotosmotoController@destroy');
Route::get('fotosmoto/{id}/deleteMsg','\R2D2Soft\Http\Controllers\FotosmotoController@DeleteMsg');
/********************* fotosmoto ***********************************************/


//detalletrabajo Resources
/********************* detalletrabajo ***********************************************/
Route::resource('detalletrabajo','\R2D2Soft\Http\Controllers\DetalletrabajoController');
Route::get('detalletrabajo/{id}/create','\R2D2Soft\Http\Controllers\DetalletrabajoController@create');
Route::post('detalletrabajo/{id}/update','\R2D2Soft\Http\Controllers\DetalletrabajoController@update');
Route::get('detalletrabajo/{id}/delete','\R2D2Soft\Http\Controllers\DetalletrabajoController@destroy');
Route::get('detalletrabajo/{id}/deleteMsg','\R2D2Soft\Http\Controllers\DetalletrabajoController@DeleteMsg');
/********************* detalletrabajo ***********************************************/


//repuestosmoto Resources
/********************* repuestosmoto ***********************************************/
Route::resource('repuestosmoto','\R2D2Soft\Http\Controllers\RepuestosmotoController');
Route::post('repuestosmoto/{id}/update','\R2D2Soft\Http\Controllers\RepuestosmotoController@update');
Route::post('repuestosmoto/{id}/create','\R2D2Soft\Http\Controllers\RepuestosmotoController@store');
Route::get('repuestosmoto/{id}/delete','\R2D2Soft\Http\Controllers\RepuestosmotoController@destroy');
Route::get('repuestosmoto/{id}/deleteMsg','\R2D2Soft\Http\Controllers\RepuestosmotoController@DeleteMsg');
/********************* repuestosmoto ***********************************************/


//repuestosutilizado Resources
/********************* repuestosutilizado ***********************************************/
Route::resource('repuestosutilizado','\R2D2Soft\Http\Controllers\RepuestosutilizadoController');
Route::get('repuestosutilizado/{id}/create','\R2D2Soft\Http\Controllers\RepuestosutilizadoController@create');
Route::post('repuestosutilizado/{id}/update','\R2D2Soft\Http\Controllers\RepuestosutilizadoController@update');
Route::get('repuestosutilizado/{id}/delete','\R2D2Soft\Http\Controllers\RepuestosutilizadoController@destroy');
Route::get('repuestosutilizado/{id}/deleteMsg','\R2D2Soft\Http\Controllers\RepuestosutilizadoController@DeleteMsg');
/********************* repuestosutilizado ***********************************************/


//compra Resources
/********************* compra ***********************************************/
Route::resource('compra','\R2D2Soft\Http\Controllers\CompraController');
Route::post('compra/{id}/update','\R2D2Soft\Http\Controllers\CompraController@update');
Route::get('compra/{id}/delete','\R2D2Soft\Http\Controllers\CompraController@destroy');
Route::get('compra/{id}/deleteMsg','\R2D2Soft\Http\Controllers\CompraController@DeleteMsg');
/********************* compra ***********************************************/


//informecontrato Resources
/********************* informecontrato ***********************************************/
Route::resource('informecontrato','\R2D2Soft\Http\Controllers\InformecontratoController');
Route::get('informecontrato/{id}/create','\R2D2Soft\Http\Controllers\InformecontratoController@create');
Route::get('informecontrato/{id}/imprimirProforma','\R2D2Soft\Http\Controllers\InformecontratoController@imprimirProforma');
Route::post('informecontrato/{id}/update','\R2D2Soft\Http\Controllers\InformecontratoController@update');
Route::get('informecontrato/{id}/showProforma','\R2D2Soft\Http\Controllers\InformecontratoController@showProforma');
Route::get('informecontrato/{id}/delete','\R2D2Soft\Http\Controllers\InformecontratoController@destroy');
Route::get('informecontrato/{id}/deleteMsg','\R2D2Soft\Http\Controllers\InformecontratoController@DeleteMsg');
/********************* informecontrato ***********************************************/

//reportes Resources
/********************* reportes ***********************************************/
Route::resource('reportes','\R2D2Soft\Http\Controllers\ReportesController');
/********************* reportes ***********************************************/

//informeentrega Resources
/********************* informeentrega ***********************************************/
Route::resource('informeentrega','\R2D2Soft\Http\Controllers\InformeentregaController');
Route::get('informeentrega/{id}/create','\R2D2Soft\Http\Controllers\InformeentregaController@create');
Route::post('informeentrega/{id}/update','\R2D2Soft\Http\Controllers\InformeentregaController@update');
Route::get('informeentrega/{id}/delete','\R2D2Soft\Http\Controllers\InformeentregaController@destroy');
Route::get('informeentrega/{id}/deleteMsg','\R2D2Soft\Http\Controllers\InformeentregaController@DeleteMsg');
/********************* informeentrega ***********************************************/

