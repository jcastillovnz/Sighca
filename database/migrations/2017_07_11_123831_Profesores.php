<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


       Schema:: create('profesores', function (Blueprint $table) {
 $table->increments('id');
 $table->string('primernombre');
  $table->string('segundonombre')->nullable();
 $table->string('primerapellido');
  $table->string('segundoapellido')->nullable();
$table->string('cedula')->unique;
$table->string('foto');
$table->string('profesion');
$table->string('telefono');
$table->string('correo');
$table->string('cargo');

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
