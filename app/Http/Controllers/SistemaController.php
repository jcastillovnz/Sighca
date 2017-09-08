<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Profesores;







class SistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */




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











    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
