<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListeController extends Controller
{
    function Liste(){
        $patients = Patient::all();
        return view('Patient.Liste', compact('patients'));
       
    }
    function index(){
        return view('Patient.Liste');
    }

    public function Edit($numcnib){
        $patient= Patient::All();
        $vue=Patient::find($numcnib);
    return view('Patient/modifier',['patient'=>$vue]);
    
    }
}
