<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ville;


class VilleController extends Controller
{
    public function create(){
        return view('Centre.Ville');
    }

    public function store(Request $request )

    {
    $objet= Ville::create([
        // 'id'=>$request->id,
        'numero'=>$request->numero,
        'nom'=>$request->nom,
                
    ]);
    
    return back();
}

}

