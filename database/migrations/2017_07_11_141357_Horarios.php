<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Horarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


    Schema:: create('horarios', function (Blueprint $table) {

 $table->increments('id');
 $table->string('co_infraestructura');
 $table->string('horario_am');

  $table->string('co_asignatura');

$table->string('co_profesor');


   


 $table->timestamps();



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
