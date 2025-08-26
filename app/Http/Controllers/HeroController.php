<?php

namespace App\Http\Controllers;
Use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
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
        //valider le form
        $request->validate([
            'image' => 'required|image|mimes;jpeg,jpg,png,gif|max:2048',
        ]);
        $imagePath = $request->file('image')->store('hero_image','public');
        $hero=Hero::create([
            'image' => $imagePath,
            'nom-page' =>  $request->nom_page,
            'texte_principal' => $request->text_principal,
            'texte_secondaire' => $request->texte_secondaire,
            'call_to_action_first' => $request->call_to_action_fist,
            'call_to_action_second' => $request->call_to_action_second,
        ]);
        return response()->json(['message' => 'Champ created successfully','hero'=> $hero]);
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
