<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GallerieController extends Controller
{
    function Gallerie(){
        return view('pages_internes.gallerie');
    }
}
