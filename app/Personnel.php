<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $guarded=[];

    public function Centre(){
    return $this->belongsTo(Centre::class);
}
public function Patient(){
return $this->hasMany(Patient::class);
}
}
