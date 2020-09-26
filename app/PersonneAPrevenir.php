<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonneAPrevenir extends Model
{
    protected $guarded=[];
    public function Patient(){
        return $this->belongsToMany(PersonneAprevenir::class,'NumCNIB','id');
    }
    public function Villes(){
        return $this->hasOne(Villes::class,'id');
    }
}


