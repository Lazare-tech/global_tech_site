<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Equipe;
//
class HomeController extends Controller
{
    public function home()
    {
        $services=Services::all();
                $equipes=Equipe::all();

        
        return view('index',compact('services','equipes'));
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
