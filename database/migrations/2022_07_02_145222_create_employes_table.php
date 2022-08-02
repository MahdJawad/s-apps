<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->unsignedInteger('matricule')->primary();
            $table->String('num_arrete');
            $table->foreign('num_arrete')->references('num_arrete')->on('avancements');
            $table->UnsignedInteger('idFonction');
            $table->foreign('idFonction')->references('idFonction')->on('fonctions');
            $table->UnsignedInteger('idCat');
            $table->foreign('idCat')->references('idCat')->on('categories');
            $table->UnsignedInteger('idContrat');
            $table->foreign('idContrat')->references('idContrat')->on('contrats');
            $table->string('nom_emp');
            $table->string('prenom_emp');
            $table->string('adress');
            $table->date('datenaiss');
            $table->string('lieunaiss');
            $table->string('sexe');
            $table->integer('tel');
            $table->string('mail');
            $table->string('situation_matrimoniale');
            $table->string('nb_femme');
            $table->string('nb_enfant');
            $table->string('date_prise_fonction');
            $table->string('num_cnss');
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
        Schema::dropIfExists('employes');
    }
}
