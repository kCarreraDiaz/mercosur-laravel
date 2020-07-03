<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**CREO TABLA PAIS */
        Schema::create('pais', function (Blueprint $table) {//nombre de la tabla(paises)
            
            $table->increments('id');/**CAMPOS DE LA TABLA */
            $table->string('nombre');
            $table->string('poblacion');
            $table->string('PIB_anual');
            $table->string('PIB_capita');
            $table->string('IDH');/**decimal en BD */
            $table->string('deuda_total');
            $table->string('deuda'); /**decimal en BD */
            $table->string('deficit');
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
        Schema::dropIfExists('pais');
    }
}
