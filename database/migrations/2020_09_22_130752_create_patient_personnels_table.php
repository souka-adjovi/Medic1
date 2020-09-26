<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientPersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_personnels', function (Blueprint $table) {
            $table->Unsignedinteger('NumCNIB');
            $table->Unsignedinteger('Nummatricule');
            $table->foreign('NumCNIB')->references('NumCNIB')->on('Patients')->onDelete('cascade');
            $table->foreign('Nummatricule')->references('Nummatricule')->on('Personnels')->onDelete('cascade');
            $table->primary(['NumCNIB','Nummatricule']);
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
        Schema::dropIfExists('patient_personnels');
    }
}
