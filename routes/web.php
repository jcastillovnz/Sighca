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


///indexa 
Route::resource ('/','BienvenidaController' );

Route::resource ('/busqueda','profesoresController' );

Route::get ('/profesor','profesoresController@perfil' );


Route::get ('/registro-de-producto','productosController@registro' );

Route::post('/registro-de-producto','productosController@guardar' );






Route::get('storage/{archivo}', function ($archivo) {

	
     $public_path = public_path();
     $url = $public_path.'/storage/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);
 
});









Route::get ('productos/{id} ','DetallesproductoController@index' );
Route::get ('/registro-de-compra/{id} ' , 'DetallesproductoController@show'      );












Route::get ('/contacto','contactoController@index'    );
Route::post ('/contacto','contactoController@enviar'    );














Auth::routes();

Route::get('/home', 'HomeController@index');



