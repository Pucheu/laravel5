<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Evenement', function (Blueprint $table) {
            $table->increments('id_evenement');
            $table->char('nom_evenement');
            $table->dateTime('date_evenement');
            $table->char('lieu_evenement');
            $table->char('description_evenement');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Evenement');
    }
}
