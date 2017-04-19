<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLigneCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ligne_Commande', function (Blueprint $table) {
            $table->increments('id_ligne_command');
            $table->integer('Quantite');
            $table->integer('id_article')->unsigned();
            $table->foreign('id_article') ->references('id_article')->on('Article');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ligne_Commande');
    }
}
