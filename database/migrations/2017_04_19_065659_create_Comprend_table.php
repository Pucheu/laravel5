<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comprend', function (Blueprint $table) {
            $table->integer('id_command')->unsigned();
            $table->integer('id_ligne_command')->unsigned();
            $table->foreign('id_command') ->references('id_command')->on('Commande');
            $table->foreign('id_ligne_command') ->references('id_ligne_command')->on('Ligne_Commande');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comprend');
    }
}
