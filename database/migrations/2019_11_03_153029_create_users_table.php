<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meno'); //if second argument is not set, default value is 255
            $table->string('priezvisko');
            $table->string('email')->unique();
            $table->string('heslo',60);
            $table->unsignedInteger('vek');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}
