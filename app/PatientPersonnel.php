<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientPersonnel extends Model
{
    protected $guarded=[];
public function PatientPersonnel(){
    return $this->belongsTo(Personnel::class,'Nummatricule','NummCNIB');
    return $this->belongsTo(Patient::class,'Nummatricule','NummCNIB');

}
}
