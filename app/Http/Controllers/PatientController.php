<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    function Liste(){

    }
    
    function create(){
        $creer= Patient::All();
        $recuperer=PersApre::All();
        return view('pages_internes.enregistrer',['PersApre'=>$recuperer,'Patient'=>$creer]);
    }

    public function show(Request $request){
        $pa=Patient::find($request->id);
        return view('pages_internes.enregistrer',['Patient'=>$pa]);
        }

        
     function store(Request $request)
     {
            $pa = Patient::create([
                'numcnib'=>$request->patient_id,
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'dateNaissance'=>$request->datenaissance,
                'antecedentMedicaux'=>$request->antecedentMedicaux,
                'personneAprevenir'=>$request->personneAprevenir,
                'groupesanguin'=>$request->groupesanguin,
                'telephone'=>$request->telephone,
            
            ]);
            return view('pages_internes.enregistrer');
   
     }
}

