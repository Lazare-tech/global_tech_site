<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Equipe;
use App\Models\Testimonial;
//
class HomeController extends Controller
{
    public function home()
    {
        $testimonials =Testimonial::all();
        $services=Services::all()->reverse();
                $equipes=Equipe::all();

        
        return view('index',compact('services','equipes','testimonials'));
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
