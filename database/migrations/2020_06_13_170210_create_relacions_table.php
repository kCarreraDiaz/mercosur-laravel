<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //creamos TABLA RELACIONS
        Schema::create('relacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pais');
            $table->string('nom_pais2');
            $table->date('fecha'); 
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
        Schema::dropIfExists('relacions');
    }
}
