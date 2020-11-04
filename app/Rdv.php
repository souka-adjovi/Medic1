<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Personnel;
use App\Centre;
use App\Specialite;

class Rdv extends Model
{
    protected $guarded=[];

    public function Personnel(){
    return $this->hasMany(Personnel::class);

}
public function Centre(){
    return $this->hasMany(Centre::class);

}
public function Specialite(){
    return $this->hasMany(Specialite::class);
}
}
