<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custumers', function (Blueprint $table) {
            $table->increments('id');
            $table->string("Nombre");
            $table->string("Apellidos");
            $table->string("Direccion");
            $table->timestamp("custumer_create");
            $table->unsignedTinyInteger("Estado");
        });
    }
    //CAMBIOOS MINIMOS
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custumers');
    }
}
