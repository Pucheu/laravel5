<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Article', function (Blueprint $table) {
            $table->increments('id_article');
            $table->char('nom_article');
            $table->char('description_article');
            $table->integer('prix');
            $table->integer('id_photo')->unsigned();
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
        Schema::dropIfExists('Article');
    }
}
