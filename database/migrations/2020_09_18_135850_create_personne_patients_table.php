<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personne_patients', function (Blueprint $table) {
            $table->unsignedInteger('NumCNIB');
            $table->unsignedInteger('Per_NumCNIB');
            $table->foreign('NumCNIB')->references('NumCNIB')->on('patients')->onDelete('cascade');
            $table->foreign('Per_NumCNIB')->references('NumCNIB')->on('personne_a_prevenirs')->onDelete('cascade');
            $table->primary(['NumCNIB','Per_NumCNIB']);
           
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
        Schema::dropIfExists('personne_patients');
    }
}
