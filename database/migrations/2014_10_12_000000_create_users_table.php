<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'  );
            $table->string('name');
                 $table->string('apellido');
                  $table->string('cedula')->nullable();
                   $table->string('telefono')->nullable();
            $table->string('email',50)->unique();
             $table->string('ubicacion')->nullable();
               $table->string('usuario')->nullable();
                $table->string('fecha_nacimiento')->nullable() ;
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
