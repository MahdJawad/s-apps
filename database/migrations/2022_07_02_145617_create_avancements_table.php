<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvancementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avancements', function (Blueprint $table) {
            $table->string("num_arrete")->primary();
            $table->unsignedInteger('idCat');
            $table->foreign('idCat')->references('idCat')->on('categories');
            $table->date('dateDecision');
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
        Schema::dropIfExists('avancements');
    }
}
