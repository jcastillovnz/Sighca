<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Producto;
use Illuminate\Support\Facades\Storage;






class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

 return view('/busqueda');

        //

    }


 public function perfil()
    {
      

 return view('/profesor');

        //

    }




    public function busqueda()
    {
      

//$productos= profesores ::where ('primernombre','=','1')->get(['id','primernombre','segundonombre','primerapellido','segundoapellido', 'cedula','foto','profesion','telefono','correo' ,'cargo' , ]);

//{



//return view ('productos/power-bank-samsung-2600-mah',compact('productos') );

//}



 return view('/busqueda');








        //

    }





  public function registro()
    {
      

 return view('productos/registro-de-producto');

        //

    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        


//dd($request ->estado );


        $this->validate($request,[
            'titulo'=>'required',
            'estado'=>'required',

               'precio'=>'required',
// *********************************************///
//IMAGENES

             
     //       'imagen1'=>'required' ,
         //     'imagen2'=>'required' ,
     //         'imagen3'=>'required' ,
      //        'imagen4'=>'required' ,
     //       'imagen5'=>'required' ,
        //    'imagen6'=>'required' ,   *//

// *********************************************///
//DESCRIPCIONES
   'descripcion1'=>'required' ,
   'descripcion1'=>'required' ,
   'descripcion2'=>'required' ,
   'descripcion3'=>'required' ,
   'descripcion4'=>'required' ,
   'descripcion5'=>'required' ,
   'masinformacion'=>'required' ]);










$producto = new Producto  ();
$producto->titulo= $request ->titulo;
$producto->estado= $request ->estado;
$producto->precio= $request ->precio;

// *********************************************///
//IMAGENES



$img=$request->file('imagen1');

$file_route = time().'_' .$img->  getClientoriginalname   ();

//storage::disk ('imgProducto')->put( $file_route, file_get_contents($img->getRealpath())  );
Storage::disk('local')->put($file_route, file_get_contents($img->getRealpath()) );


$producto->imagen1= $file_route;
$producto->imagen2= $file_route;
$producto->imagen3= $file_route;
$producto->imagen4= $file_route;
$producto->imagen5= $file_route;
$producto->imagen6= $file_route;

// *********************************************///
//DESCRIPCIONES
$producto->descripcion1= $request ->descripcion1;
$producto->descripcion2= $request ->descripcion2;
$producto->descripcion3= $request ->descripcion3;
$producto->descripcion4= $request ->descripcion4;
$producto->descripcion5= $request ->descripcion5;
$producto->masinformacion= $request ->masinformacion;












$producto-> save();

dd ('datos guardados');









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
