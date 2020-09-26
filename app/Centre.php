<?php

namespace App;
use App\Personnel;
use App\Ville;
use App\Patient;

use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    protected $guarded=[];
    public function Personnel()
    {
    return $this->hasMany(Personnel::class,'Cen_Nummatricule');
    }

    public function Ville()
    {
    return $this->belongsTo(Ville::class,'id'); 
    }
    public function Patient()
    {
    return $this->hasMany(Patient::class,'id'); 
    }


}
