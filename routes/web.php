<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//RUTA BIENVENIDA
Route::get ('/','SighcaController@bienvenida' );




//RUTAS PROFESOR 
Route::get ('/nuevo-profesor','ProfesoresController@nuevo' );
Route::get ('/busqueda','ProfesoresController@busqueda' );
Route::get('/guardar-profesor','ProfesoresController@guardar' );
Route::get ('/profesor','ProfesoresController@perfil' );
Route::get('/asignar-profesor','ProfesoresController@index' );
Route::get('/asignar-profesor/{id}','ProfesoresController@asignar' );
Route::get ('/detalle-profesor/{id}','ProfesoresController@mostrar' );


//RUTAS HORARIO 
Route::get('/nuevo-horario','HorarioController@index' );
Route::get('/asignar-horario','HorarioController@asignar' );


//RUTAS INFRAESTRUCTURA 
Route::get('/nueva-infraestructura','InfraestructuraController@index' );
Route::get('/guardar-infraestructura','InfraestructuraController@guardar' );


//RUTAS PENSUM 
Route::get('/nuevo-pensum','PensumController@index' );




//RUTAS SECCION
Route::get('/nueva-seccion','SeccionController@index' );
Route::get('/guardar-seccion','SeccionController@guardar' );




//RUTAS DISEÑAR HORARIO
Route::get('/diseñar-horario','HorarioController@index' );





//RUTAS CONFIGURACION
Route::get('/configuracion','SighcaController@configuracion' );


Route::get('/configuracion/mi-cuenta','SighcaController@micuenta' );



Route::get ('productos/{id} ','DetallesproductoController@index' );
Route::get ('/registro-de-compra/{id} ' , 'DetallesproductoController@show'      );












Route::get ('/contacto','contactoController@index'    );
Route::post ('/contacto','contactoController@enviar'    );














Auth::routes();

Route::get('/inicio', 'HomeController@index');



