<?php

namespace App\Http\Controllers;
use App\Profesor;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request )
    {



 $this->validate($request, [
        'nombre' => 'required|max:100',
        'apellido' => 'required|max:100',
         'cedula' => 'required|max:100|unique:profesor,cedula' ,
        'telefonocelular' => 'max:50',
         'telefonofijo' => 'max:50',
           'profesion' => 'max:100',
        'correo' => 'max:50',
        'residencia' => 'max:100',
    ]);







 
$profesor = new Profesor  ();
$profesor ->nombre= $request ->nombre;
$profesor ->apellido= $request ->apellido;
$profesor ->foto= $request ->foto;
$profesor->cedula= $request ->cedula;
$profesor ->telefonocelular= $request ->telefonocelular;
$profesor ->telefonofijo= $request ->telefonofijo;
$profesor ->profesion= $request ->profesion;
$profesor ->correo= $request ->correo;
$profesor ->residencia= $request ->residencia;
$profesor-> save();



return view ('nuevo-profesor' )
->with('mensaje', 'Guardado exitosamente');



        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function nuevo()
    {

return View('/nuevo-profesor' );
        //
    }










 public function asignar($id)
    {



         $profesores= profesor::findOrFail ($id);
return view ('/asignar-profesor',compact('profesores') );
        //
    }






    public function index()
    {
return View('/asignar-profesor' );
        //
    }










    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function busqueda (Request $request){



  $buscar=$request->buscar;

        $buscar = urldecode($buscar);
        $profesores = profesor::select()


               /// ->where('nombre', 'LIKE', '%'.$buscar.'%')
->where('nombre','LIKE', '%'.$buscar.'%')  ->orWhere    ('apellido', 'LIKE','%'.$buscar.'%') 
->orWhere    ('cedula', 'LIKE','%'.$buscar.'%')

                ->orderBy('id', 'desc')
                ->get();
        
        if (count($profesores) == 0){
            return View('/busqueda')
            ->with('message', 'No existen resultados para  ')
            ->with('buscar', $buscar);
        } else{




            return View('/busqueda',compact('profesores') );
   



        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar( $id)
    {

        
        
 $profesores= profesor::findOrFail ($id);




return view ('/detalle-profesor',compact('profesores') );
   



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
