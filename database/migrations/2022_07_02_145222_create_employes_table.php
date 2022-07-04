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
            $table->UnsignedInteger('matricule');
            $table->string('num_arrete');
            $table->UnsignedInteger('idFonction');
            $table->UnsignedInteger('idCat');
            $table->UnsignedInteger('idContrat');
           /** $table->foreignId('idFonction')->constrained('fonctions');
            *$table->foreignId('idCat')->constrained('categories');
           *$table->foreignId('idContrat')->constrained('contrats');
           */$table->string('nom_emp');
            $table->string('prenom_emp');
            $table->string('adress');
            $table->date('datenaiss');
            $table->string('lieunaiss');
            $table->string('sexe');
            $table->integer('tel');
            $table->string('mail');
            $table->string('situation_matrimoniale');
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
