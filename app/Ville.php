<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $guarded=[];

    public function centre(){
        return $this->hasMany('App\Centre');
    }
    
   
}
