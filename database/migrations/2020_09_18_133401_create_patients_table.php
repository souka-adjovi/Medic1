<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->string('nom');
            $table->string('prenom');
            $table->increments('id');
            $table->date('dateDenaissance');
            $table->string('antecedantMedicaux');
            $table->string('numcnib');
            $table->string('personneAprevenir');
            $table->string('groupesanguin');
            $table->integer('telephone');
            $table->string('adresse');
            $table->string('genre');
            $table->string('ordonne');
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
        Schema::dropIfExists('patients');
    }
}
