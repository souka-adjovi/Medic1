<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Specialite;
use App\Centre;
use App\Rdv;

class specialite extends Model
{
    protected $guarded=[];
    
    public function Centre(){
    return $this->hasMany(Centre::class);
    }

    public function Rdv(){
    return $this->hasMany(Rdv::class);
}
}
