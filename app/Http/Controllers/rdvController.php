<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rdv;
use App\Specialite;
use App\Centre;

class rdvController extends Controller


{


    public function create(){
 
        $rdv= Rdv::all();
        $specialite = Specialite::all();
        $centre= Centre::all();
        return view('layouts.Rendez-Vous',compact('specialite','Rdv','centre'));
    
    }
      public function store(Request $request )

    {
    $objet= Rdv::create([
        // 'id'=>$request->id,
        'nom'=>$request->nom,
        'email'=>$request->email,
        'date'=>$request->date,
        'heure'=>$request->heure,
        'centre_id'=>$request->centre_id,
        'specialite_id'=>$request->specialite_id,
                
    ]);
    
    return back();
    }

    // function rdv(){
    //     $specialite= Specialite::all();
    //     return view('Centre.Specialite',compact('specialite'));
    //     return view('layouts.Rendez-Vous');
    // }
}
