<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{

   public $table = "Profesor";




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'foto','cedula','telefonocelular','telefonofijo','profesion',
        'correo', 'residencia'
    ];








    //
}
