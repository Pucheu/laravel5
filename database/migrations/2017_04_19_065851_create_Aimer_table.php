<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAimerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Aimer', function (Blueprint $table) {

            $table->integer('id_user')->unsigned();
            $table->integer('id_photo')->unsigned();
            $table->foreign('id_user') ->references('id_user')->on('users');
            $table->foreign('id_photo') ->references('id_photo')->on('Photo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Aimer');

    }
}
