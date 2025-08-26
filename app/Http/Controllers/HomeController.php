<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Realisation;
class HomeController extends Controller
{
    public function home()
    {
        $realisation=Realisation::all();
        return view('index',['realisation' => $realisation]);
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
