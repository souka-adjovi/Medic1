<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class officeController extends Controller
{
    public function index()
    {
        return view('backoffice/Accueil');
    }
}
