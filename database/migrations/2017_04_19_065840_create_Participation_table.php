<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Participation', function (Blueprint $table) {
            $table->dateTime('proposition_heure');
            $table->integer('id_user')->unsigned();
            $table->integer('id_evenement')->unsigned();
            $table->foreign('id_user') ->references('id_user')->on('users');
            $table->foreign('id_evenement') ->references('id_evenement')->on('Evenement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Participation');

    }
}
