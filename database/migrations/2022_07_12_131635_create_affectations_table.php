<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffectationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affectations', function (Blueprint $table) {
            $table->increments('idNaf');
            $table->unsignedInteger('matricule');
            $table->foreign('matricule')->references('matricule')->on('employes');
            $table->string('typeAffect');
            $table->string('lieuAffect');
            $table->date('dateAffect');
            $table->date('datePriseServ');
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
        Schema::dropIfExists('affectations');
    }
}
