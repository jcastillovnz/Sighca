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
 $table->string('Lugar');
  $table->string('aula');
 $table->string('horario');
  $table->string('co_pensum');

$table->string('codigo')->unique;

   


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
