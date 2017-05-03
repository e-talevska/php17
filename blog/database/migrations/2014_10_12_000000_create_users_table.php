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
            $table->increments('id');//avtomatski inkrement na id
            $table->string('name');//varchar
            $table->string('email', 250)->unique();//doponitelno unikaten, index, ne dozvoluva dva zapisi so ista vrednost
            //treba da se dodade 250
            $table->string('password');
            $table->rememberToken();//metodi
            $table->timestamps();
            $table->engine = 'INNODB';
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
