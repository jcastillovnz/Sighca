<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Seccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //




       Schema:: create('seccion', function (Blueprint $table) {
 $table->increments('id');
  $table->string('idpensum');
    $table->string('semestre');
 $table->string('prefijoseccion');
 $table->timestamps();



 });






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
