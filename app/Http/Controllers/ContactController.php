<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contact(){
        return view('pages_internes.contact');
    }

    function create(){
        $creer= Patient::All();
        return view('pages_internes.contact');
    }
    public function store(){
    $pa = Patient::create([
        'id'=>$request->patient_id,
        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'email'=>$request->email,
        'sujet'=>$request->sujet,
        'message'=>$request->message,
        
    
    ]);
    return view('pages_internes.contact');


}
}