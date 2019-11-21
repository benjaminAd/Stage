<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePorteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porteurs', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Email');
            //$table->unique('Email', 'unique_email');
            $table->string('Login');
           // $table->unique('Login', 'unique_Login');
            $table->string('Mdp');
            $table->double('Telephone');
            $table->string('Poste');
            $table->integer('IdOrga');
            $table->foreign('IdOrga')->references('Id')->on('organisations');
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
        Schema::dropIfExists('porteurs');
    }
}
