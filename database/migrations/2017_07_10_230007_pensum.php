<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class  Pensum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //



     Schema:: create('pensum', function (Blueprint $table) {

 $table->increments('id');
 $table->string('vigencia');
 $table->string('codigo')->unique;
  $table->string('asignatura');





   


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
