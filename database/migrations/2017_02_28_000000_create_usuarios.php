<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('usr_id');
            $table->string('usr_username')->unique();
            $table->string('usr_email')->unique();
            $table->string('usr_password');
            $table->integer('usr_prf_id')->unsigned();
            $table->integer('usr_ativo');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('usr_prf_id')->references('prf_id')->on('perfis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
