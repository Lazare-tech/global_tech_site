<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;
//
class ContactController extends Controller
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
            'nom' => 'required|string|max:255',
                        'numero_telephone' => 'required|phone:AUTO',

            'message' => 'required|string',
        ],[
            'email.email' => 'Veuillez saisir une adresse e-mail valide.',
                            'numero_telephone.phone' => 'Veuillez saisir un numéro de téléphone valide avec indicatif (+XXX).',

        ]);
        $data=Contact::create([
            'nom' => $request->nom,
            'objet' => $request->objet,
            'numero_telephone' => $request->numero_telephone,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        Mail::to('yelmaniyel@gmail.com')->send(new ContactNotification($data));
        return redirect()->back()->with('contact_success', 'Merci de nous avoir contacter !');

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
