<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnePatient extends Model
{
    protected $guarded=[];
    public function PatientPersonnel(){
    return $this->belongsTo(Personne::class,'Personne_NumCNIB','NumCNIB');
    return $this->belongsTo(Patient::class,'Personne_NumCNIB','NumCNIB');
}
}
