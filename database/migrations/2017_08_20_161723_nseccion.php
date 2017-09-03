<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nseccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



       Schema:: create('nseccion', function (Blueprint $table) {

 $table->increments('id');
  $table->string('idseccion');
 $table->string('nombreseccion');
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
