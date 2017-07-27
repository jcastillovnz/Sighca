<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'estado', 'descripcion',
    ];





    //
}
