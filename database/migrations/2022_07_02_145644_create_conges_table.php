<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->increments('idConge');
            $table->unsignedInteger('matricule');
            $table->foreign('matricule')->references('matricule')->on('employes');
            $table->unsignedInteger('idTypeConge');
            $table->foreign('idTypeConge')->references('idTypeConge')->on('type_conges');
            $table->Integer('dureeConge');
            $table->date('dateCessation');
            $table->date('dateReprise');
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
        Schema::dropIfExists('conges');
    }
}
