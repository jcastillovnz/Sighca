<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Infraestructura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

       Schema:: create('infraestructura', function (Blueprint $table) {






 $table->increments('id');

$table->string('nombreinfraestructura') ;
$table->string('ubicacion') ;
$table->string('telefono') ;
$table->string('correo') ;
$table->string('numeroedificios');
$table->timestamps(); 
 



 //$table->string('ubicacion') ->default('Spain');   


 



  });




        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
