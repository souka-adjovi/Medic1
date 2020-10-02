<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    public function register_admin(){
        return view('layouts/registerAdmin');
    }
    function contact(){
        return view('pages_internes.contact');
    }
    function gallerie(){
        return view('pages_internes.gallerie');
    }
    function apropos(){
        return view('pages_internes.A-propos');
    }
    function single(){
        return view('pages_internes.single');
    }
}

