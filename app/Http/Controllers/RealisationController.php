<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Realisation;
use Illuminate\Support\Str;

//
class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $realisations= Realisation::all();
        return view('components.realisat',compact('realisations'));
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
        $imagePath = $request->file('image')->store('realisation_image','public');
        Realisation::create([
            'titre' => $request->titre,
            'image' => $imagePath,
            'description' => $request->description,
            'lieu_realisation' => $request->lieu_realisation,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)

    public function show($id,$slug)
    {
        $realisations_detail=Realisation::findOrFail($id);
        $realisations_images=Realisation::with('realisationImages')->findOrFail($id);
        if($slug !==Str::slug($realisations_detail->titre)){
            return redirect()->route('detail_realisation',[
                'id' => $realisations_detail->id,
                'slug' => Str::slug($realisations_detail->titre)
            ]);
        }
        return view('components.realisat_detail',compact('realisations_detail','realisations_images'));
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
