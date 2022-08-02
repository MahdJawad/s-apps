<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grilles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('idCat');
            $table->foreign('idCat')->references('idCat')->on('categories');
            $table->unsignedInteger('idEchelon');
            $table->foreign('idEchelon')->references('idEchelon')->on('echelons');
            $table->integer('indice');
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
        Schema::dropIfExists('grilles');
    }
}
