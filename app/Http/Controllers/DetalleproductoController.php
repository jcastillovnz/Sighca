<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class DetalleproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

$productos= producto ::where ('id','=','1')->get(['id','titulo', 'estado', 'descripcion', 'precio']);

{



return view ('productos/power-bank-samsung-2600-mah',compact('productos') );

}


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





$productos= producto ::find ($id);



return view ('Detalleproducto.showExpediente', array('expediente' => $expediente));





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
      




        $expediente = Expediente::find($id);
               return view ('expedientes.editarExpediente', array ('expediente' => $expediente));




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
    $expediente = Expediente::find($id);
        $expediente -> delete(); 
                $expediente -> save(); 
        return 'eliminado';
    }
}
