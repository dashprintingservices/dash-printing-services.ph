<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function clients()
    {
        return view('clients');
    }

    public function sales()
    {
        return view('sales');
    }

    public function inventory()
    {
        return view('inventory');
    }

    public function idProcessing()
    {
        return view('id_processing');
    }

    public function reports()
    {
        return view('reports');
    }
}
