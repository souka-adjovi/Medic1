<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    function Single(){
        return view('pages_internes.single');
    }
}
