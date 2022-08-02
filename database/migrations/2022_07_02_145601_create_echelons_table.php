<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEchelonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('echelons', function (Blueprint $table) {
            $table->increments('idEchelon');
            $table->UnsignedInteger('idCat');
            $table->foreign('idCat')->references('idCat')->on('categories');
            $table->string('libelleEchelon');
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
        Schema::dropIfExists('echelons');
    }
}
