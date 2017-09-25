<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SighcaController extends Controller
{













public function bienvenida()
    {



return view ('/welcome' );


        //
    }







    public function index()
    {


return view ('/configuracion/mi-cuenta' );



    }









public function micuenta(Request $request )
    {







if   (empty( $request ->id )) {

    

return view ('/configuracion/mi-cuenta' );



}



if   (isset ( $request ->id )) {



return view ('/configuracion/mi-cuenta' )
->with('estado', '1');



}






if   (isset ( $request ->name )) {

$this->validate($request, [

 'name' => 'required|string|max:100',
'apellido' => 'required|string|max:100',
'cedula' => '|string|max:100|unique:users',
'email' => 'required|string|email|max:255|unique:users',
'telefono' => 'required|string',
'nivelacceso' => 'required|string',
'password' => 'required|string|min:6|confirmed',

  ]);




$users = new User  ();
$users ->nombre= $request ->nombre;
$users ->apellido= $request ->apellido;
$users ->cedula= $request ->cedula;
$users ->email= $request ->email;
$users ->telefono= $request ->telefono;
$users ->nivelacceso= $request ->nivelacceso;
$users ->password= $request ->password;
$User-> save();



return view ('/configuracion/mi-cuenta' )
->with('mensaje', 'Actualizado');








}




 











        //
    }





public function configuracion()
    {



return view ('/configuracion' );


        //
    }



















    //
}









