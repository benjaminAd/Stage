<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealisateurProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisateur_projets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Email');
            $table->string('Login');
            $table->string('Mdp');
            $table->double('Telephone');
            $table->date('DateNaissance');
            $table->string('CVURL');
            $table->string('LinkedinURL');
            $table->string('PhotoDeProfilURL');
            $table->integer('NbProjets');
            $table->integer('NbPoints');
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
        Schema::dropIfExists('realisateur_projets');
    }
}
