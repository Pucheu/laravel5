<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone',100) ->unique();
            $table->string('ecole');
            $table->string('avatar')->default('default.jpg');
            $table->string('email');
            $table->string('password',100) ->unique();
            $table->integer('id_role') ->unsigned();
            $table->foreign('id_role') ->references('id_role')->on('Role');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
