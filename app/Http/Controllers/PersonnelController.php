<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel;
use App\Centre;

class PersonnelController extends Controller
{
    function create(){
        $centre= Centre::all();
        return view('Personnel.Enregistrer',compact('centre'));
    }
    public function index(){
        $personnel=Personnel::all();
        $centre= Centre::all();
        return view('Personnel.Liste', compact('personnel','centre'));
    }



    public function store(Request $request )

    {
    $personnel= Personnel::create([
        'Nummatricule'=>$request->Nummatricule,
        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'fonction'=>$request->fonction,
        'centre_id'=>$request->centre_id,
        'dateDenaissance'=>$request->dateDenaissance,
        'telephone'=>$request->telephone,
        
    ]);
    
    return back();
}
}
