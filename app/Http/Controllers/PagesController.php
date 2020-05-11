<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function welcome()
    {
    	return view('welcome');
    }

    public function index()
    {
    	return view('/pages/perfil');
    }

    public function consultaIndex()
    {
    	return view('/pages/consultaprivadas/index');
    }

}
