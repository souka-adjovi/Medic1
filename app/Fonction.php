<?php

namespace App;
use App\Personnel;


use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    protected $guarded=[];
    public function Personnel()
    {
    return $this->belongsTo(Personnel::class,'Cen_Nummatricule');
    }
  
}