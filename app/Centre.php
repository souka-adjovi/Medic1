<?php

namespace App;
use App\Personnel;
use App\Ville;
use App\Patient;
use App\Rdv;

use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    protected $guarded=[];

    public function Personnel()
    {
    return $this->hasMany(Personnel::class,'centre_id');
    }

    public function Ville()
    {
    return $this->belongsTo(Ville::class,'centre_id'); 
    }
    public function Patient()
    {
    return $this->hasMany(Patient::class,'centre_id'); 
    }

    public function Specialite(){
        return $this->hasMany(Specialite::class);
    }
    public function Rdv(){
        return $this->hasMany(Rdv::class);
    }
}
