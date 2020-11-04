<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Centre;
use App\Ville;

class CentreController extends Controller
{
    public function create(){
        $villes= Ville::all();
        return view('Centre.Centre',compact('villes'));
    }
    public function store(Request $request )

    {
    $objet= Centre::create([
        'ville_id'=>$request->ville_id,
        'nom'=>$request->nom,
        'telephone'=>$request->telephone,
        'adresse'=>$request->adresse,
                
    ]);
    
    return back();
}
}
