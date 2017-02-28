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
            $table->increments('id');
            $table->string('username',50)->unique();
            $table->string('email',255);
            $table->string('password',255);
            $table->integer('prf_id')->unsigned()->default(2);
            $table->integer('ativo')->default(1);
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
        Schema::dropIfExists('users');
    }
}
