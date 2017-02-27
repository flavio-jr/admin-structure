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
            $table->increments('id');
            $table->string('username',50)->unique();
            $table->string('email',255);
            $table->string('password',255);
            $table->integer('prf_id')->unsigned();
            $table->integer('ativo');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('prf_id')->references('prf_id')->on('perfis')->onDelete('cascade');
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
