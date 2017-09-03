<?php

namespace App\Http\Controllers;
use App\Infraestructura;
use Illuminate\Http\Request;

class InfraestructuraController extends Controller
{
    //





 public function index()
    {



  return View('/nueva-infraestructura' );


        //
    }



 public function guardar( Request $request )
    {

/*
dd($request->all());
dd($request ->nombre );
dd($request ->ubicacion );
dd($request ->telefono );
dd($request ->correo );
dd($request ->numeroedificios );*/




if   (isset ( $request ->nombreinfraestructura )) {

 //PRIMER FORMULARIO INFRAESTRUCTURA  EXITOSO

 $this->validate($request, [
 
        'nombreinfraestructura' => 'required|max:100',
        'ubicacion' => 'required|max:100',
        'telefono' => 'max:50',
        'correo' => 'max:50',
        'numeroedificios' => 'max:20',
    ]);

$data["nombreinfraestructura"] = $request->nombreinfraestructura;
$data["ubicacion"] = $request->ubicacion;
$data["nedificios"] = $request->numeroedificios;
$data["numeroedificios"] = $request->numeroedificios;



 return view ('nueva-infraestructura', $data )

    ;


 // 1 PRIMER FORMULARIO INFRAESTRUCTURA EXITOSO
}



if   (isset ( $request ->nombreedificio )) {

 //SEGUNDO FORMULARIO EDIFICIOS  EXITOSO
 
$data["nombreedificio"] = $request->nombreedificio;
$data["numeroaulas"] = $request->numeroaulas;
$data["nedificios"] = $request->numeroedificios;
$data["nominfraestructura"] = $request->nombreinfraestructura;


 return view ('nueva-infraestructura' ,$data) 
 
 ;




 //SEGUNDO FORMULARIO EDIFICIOS  EXITOSO
}






if   (isset ( $request ->numeroaulas )) {
	//ULTIMO PASO
 return view ('nueva-infraestructura' ) 
 ->with('numeroaulas', $request ->numeroaulas)
 ->with('nedificios', $request ->numeroedificios)
 ;





//ULTIMO PASO
}















}
//CIERRE DE METODO Y LA CLASE
}