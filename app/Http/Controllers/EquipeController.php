<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;
use Intervention\Image\Facades\Image;
//
class EquipeController extends Controller
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
            'image' => 'required|image|mimes:jpeg,jpg,png|max:90480',

        ]);
        //
                // Charger l'image avec Intervention
        $image = $request->file('image');
        $img = Image::make($image->getRealPath());
        //
        // Redimensionner (par ex. max 600px de largeur)
        $img->resize(600, null, function ($constraint) {
        $constraint->aspectRatio(); // conserve proportions
        $constraint->upsize();      // évite d'agrandir une petite image
        });
                // Définir chemin de stockage
        $imageName = time().'_'.$image->getClientOriginalName();
        $imagePath = 'equipe_image/'.$imageName;

        // Sauvegarder dans storage/app/public/equipe_image
        $img->save(storage_path('app/public/'.$imagePath));


        //
        Equipe::create([
            'nom' => $request->nom,
            'post' => $request->post,
            'image' => $imagePath,

        ]);

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
