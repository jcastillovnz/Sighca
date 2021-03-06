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
        


       Schema:: create('profesor', function (Blueprint $table) {
 $table->increments('id');
 $table->string('nombre');
 $table->string('apellido');
 $table->string('foto')->nullable();
$table->string('cedula')->unique();


$table->string('telefonocelular')->nullable();
$table->string('telefonofijo')->nullable();

$table->string('profesion');

$table->string('correo');
$table->string('residencia')->nullable();
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
