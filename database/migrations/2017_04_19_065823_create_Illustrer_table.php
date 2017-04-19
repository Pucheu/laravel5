<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIllustrerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Illustrer', function (Blueprint $table) {
        $table->integer('id_photo')->unsigned();
        $table->integer('id_evenement')->unsigned();
        $table->foreign('id_photo') ->references('id_photo')->on('Photo');
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
        Schema::dropIfExists('Illustrer');
    }
}
