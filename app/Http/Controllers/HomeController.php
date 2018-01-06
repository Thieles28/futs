<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function cadastrar(){
        return view('dashboard.cadastrar');
    }

    public function perfil()
    {
        return view('perfil.index');
    }
}
