<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class contact extends Model
{
    protected $guarded=[];

    public function Patient()
    {
    return $this->hasMany(Patient::class);

    }
}
