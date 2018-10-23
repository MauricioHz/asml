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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('document.home.index');
    }

    public function create()
    {
        return view('document.home.create');
    } 
    
    public function unProyecto()
    {
        return view('document.home.unproyecto');
    }     
}
