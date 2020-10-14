<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AproposController extends Controller
{
    function Apropos(){
        return view('pages_internes.A-propos');
    }
}
