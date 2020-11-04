<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Personnel;
use App\PersonneAPrevenir;
use App\Centre;
use App\User;
use App\Contact;

class Patient extends Model

  
    {
        protected $guarded=[];
        public function Personnel()
        
        {
        return $this->hasMany(Personnel::class);
        }
        public function PersonneAPrevenir()
        {
            return $this->hasMany(PersonneAPrevenir::class);
        }
        public function Centre()
        {
            return $this->belongsTo(Centre::class);
        }
        public function PersonnePatient()
        {
            return $this->hasMany(PersonnePatient::class);
        }
        public function Users()
        {
        return $this->belongsTo(user::class);
        }
        public function PatientPersonnel(){
        return $this->hasMany(PatientPersonnel::class);
        }
        public function Contact(){
            return $this->hasMany(Contact::class);
            }
}