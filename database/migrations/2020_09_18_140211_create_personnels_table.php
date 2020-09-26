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
            $table->increments('Nummatricule');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('fonction_id');
            $table->foreign('fonction_id')->references('id')->on('fonctions')->onDelete('cascade');
            $table->unsignedInteger('centre_Nummatricule');
            $table->foreign('centre_Nummatricule')->references('Nummatricule')->on('centres')->onDelete('cascade');
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
