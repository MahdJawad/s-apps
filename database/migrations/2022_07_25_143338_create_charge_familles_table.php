<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargeFamillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charge_familles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('matricule');
            $table->foreign('matricule')->references('matricule')->on('employes');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateNaiss');
            $table->string('lieuNaiss');
            $table->string('lienFamille');
            $table->string('sexe');
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
        Schema::dropIfExists('charge_familles');
    }
}
