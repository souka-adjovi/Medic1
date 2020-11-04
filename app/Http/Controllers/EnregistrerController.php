<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\PersApre;

class EnregistrerController extends Controller{

    function Enregistrer(){
    return view('pages_internes.enregistrer');
}

public function index(){
    $patients=Patient::all();
    return view('Patient.Liste', compact('patients'));
}
public function store(Request $request )

    {
    $patient= Patient::create([
        'numcnib'=>$request->numcnib,
        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'dateDenaissance'=>$request->dateDenaissance,
        'antecedantMedicaux'=>$request->antecedantMedicaux,
        'personneAprevenir'=>$request->personneAprevenir,
        'groupesanguin'=>$request->groupesanguin,
        'telephone'=>$request->telephone,
        'adresse'=>$request->adresse,
        'genre'=>$request->genre,
        'ordonne'=>$request->ordonne,
    ]);
    
    return back();
}

public function update(Request $request){
   
 
    $Ajout= Patient::find($request->id);
    $Ajout->nom=$request->nom;
    $Ajout->prenom=$request->prenom;
    $Ajout->dateDenaissance=$request->dateDenaissance;
    $Ajout->antecedantMedicaux=$request->antecedantMedicaux;
    $Ajout->numcnib=$request->numcnib;
    $Ajout->personneAprevenir=$request->personneAprevenir;
    $Ajout->groupesanguin=$request->groupesanguin;
    $Ajout->telephone=$request->telephone;
    $Ajout->adresse=$request->adresse;
    $Ajout->genre=$request->genre;
    $Ajout->ordonne=$request->ordonne;
    $Ajout->update();
    
    return redirect('Patient/modifier');

}

public function edit(){

    $recuperer = Patient::all();
    
    return view('Patient/modifier',['patient'=>$recuperer]);

}


public function destroy(Request $request){
    $supprimer = Patient::find($request->id);
    $supprimer->delete();
    return back();
       }

       public function show(Request $request){
        $afficher=Patient::find($request->id);
        return view('Patient/Detail',['patient'=>$afficher]);
        }
    
    
}





