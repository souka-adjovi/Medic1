<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnregistrerController extends Controller
{
    function Enregistrer(){
        return view('pages_internes.enregistrer');
    }
}
