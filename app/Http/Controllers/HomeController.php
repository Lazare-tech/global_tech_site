<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function devis()
    {
        return view('components.devis');
    }
    public function contact()
    {
        return view('components.contact');
    }
    //
}
