<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class imagesController extends Controller
{
    public function images(){
        return view('layouts/pages_internes/gallerie');
    }
}
