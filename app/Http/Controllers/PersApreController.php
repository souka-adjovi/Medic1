<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersApreController extends Controller
{
    function index(){
        return view('Patient.ListePersApre');
    }
    function store(){
      return view('Patient.PersApre');
      $app=PersApre ::create([
        'tuteur_id'=>$request->tuteur_id,
        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'dateNaissance'=>$request->dateNaissance,
        'villeDorigine'=>$request->villeDorigine,
        'formation'=>$request->formation,
        'etablissementPrecedent'=>$request->etablissementPrecedent,
        'telephone'=>$request->telephone,
        'email'=>$request->email,
        'genre'=>$request->genre,
        'photo'=>$request->photo->store('photos','public'),
    ]);
    return back();  
    }
}
