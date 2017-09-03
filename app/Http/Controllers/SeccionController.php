<?php
use App\Seccion;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


return View('/nueva-seccion' );


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
    public function guardar(Request $request)
    {






if   (isset ( $request ->numeroseccion )) {


 $this->validate($request, [
 
        'prefijoseccion' => 'required|max:100',
        'carrera' => 'max:100',
        'semestre' => 'max:100',
        'numeroseccion' => 'max:20',
    ]);




 return view ('nueva-seccion' )

  ->with('numeroseccion',$request ->numeroseccion)
    ->with('carrera',$request ->carrera)
    ->with('semestre',$request ->semestre)
->with('prefijoseccion',$request ->prefijoseccion)
  ;

}









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
