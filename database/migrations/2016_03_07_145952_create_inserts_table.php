<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inserts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('cpf');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('phone');
            $table->string('whatsapp');
            $table->integer('own_boat');
            $table->string('boat_model');
            $table->string('boat_interest');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inserts');
    }
}


