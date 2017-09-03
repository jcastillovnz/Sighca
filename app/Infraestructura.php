<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infraestructura extends Model
{
    //

public $table = "Infraestructura";

  protected $fillable = [
        'nombreinfraestructura', 'ubicacion', 'telefono','correo','numeroedificios',
    ];











}
