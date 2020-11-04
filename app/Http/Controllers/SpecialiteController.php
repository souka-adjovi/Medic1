<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialite;

class SpecialiteController extends Controller
{
    public function create(){
        return view('Centre.Specialite');
    }

    public function store(Request $request)
    {
        $objet= specialite::create([
            'id'=>$request->id,
            'nom'=>$request->nom,
        ]);
    return back();
    
}
}

