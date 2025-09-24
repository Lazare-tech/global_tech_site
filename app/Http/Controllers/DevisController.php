<?php

namespace App\Http\Controllers;

use App\Mail\NotificationDevis;
use Illuminate\Http\Request;
use App\Models\Devis;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use Propaganistas\LaravelPhone\PhoneNumber;
//
class DevisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'email' => 'required|email:rfc,dns|max:255',
            'numero' => 'required|phone:AUTO',

        ],[
            'email.email' => 'Veuillez saisir une adresse e-mail valide.',
                'numero.phone' => 'Veuillez saisir un numéro de téléphone valide avec indicatif (+XXX).',
        ]);
        $devis=Devis::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'numero' => $request->numero,
            'message' => $request->message
        ]);
        //
        Mail::to('yelmaniyel@gmail.com')->send(new NotificationDevis($devis));
        return redirect()->back()->with('devis_success', 'Merci de nous avoir contacter,nous vous repondons au plus vite');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
