<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;
//
class HistoryController extends Controller
{
    //
    public function history()
    {
        $equipes=Equipe::all();
        return view('components.history',compact('equipes'));
    }
}
