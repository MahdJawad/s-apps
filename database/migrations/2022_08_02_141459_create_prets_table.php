<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prets', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('matricule');
            $table->foreign('matricule')->references('matricule')->on('employes');
            $table->unsignedInteger('idBult');
            $table->foreign('idBult')->references('idBult')->on('bulletins');
            $table->unsignedfloat('valeur');
            $table->unsignedfloat('retenu');
            $table->date('date');
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
        Schema::dropIfExists('prets');
    }
}
