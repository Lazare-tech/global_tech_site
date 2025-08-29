<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
class HomeController extends Controller
{
    public function home()
    {
        $services=Services::all();
        
        return view('index',compact('services'));
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
