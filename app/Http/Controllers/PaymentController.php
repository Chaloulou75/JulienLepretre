<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/payment/index');
    }

    public function plan6sesiones()
    {
        return view('/pages/payment/plan/plan6sesiones');
    }

    public function plan12sesiones()
    {
        return view('/pages/payment/plan/plan12sesiones');
    }

    public function rechazado()
    {
        return view('/pages/payment/plan/rechazado/rechazado');
    }

    public function plan6confirmado()
    {
        return view('/pages/payment/plan/confirmado/plan6confirmado');
    }

    public function plan12confirmado()
    {
        return view('/pages/payment/plan/confirmado/plan12confirmado');
    }
}
