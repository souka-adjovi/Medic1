<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nummatricule')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('fonction');
            $table->unsignedInteger('centre_id');
            $table->foreign('centre_id')->references('id')->on('centres')->onDelete('cascade');
            $table->string('dateDenaissance');
            $table->integer('telephone');
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
        Schema::dropIfExists('personnels');
    }
}
