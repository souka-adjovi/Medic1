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
            $table->Unsignedinteger('patient_id');
            $table->Unsignedinteger('personnel_id');
            $table->foreign('patient_id')->references('id')->on('Patients')->onDelete('cascade');
            $table->foreign('personnel_id')->references('id')->on('Personnels')->onDelete('cascade');
            $table->primary(['patient_id','personnel_id']);
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
