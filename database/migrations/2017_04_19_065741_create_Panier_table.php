<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Panier', function (Blueprint $table) {
            $table->integer('id_user')->unsigned();
            $table->integer('id_ligne_command')->unsigned();
            $table->foreign('id_user') ->references('id_user')->on('users');
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
        Schema::dropIfExists('Panier');
    }
}
