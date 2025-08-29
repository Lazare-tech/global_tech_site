<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Str;

//
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        
        return view('components.services');
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
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);
        //stocker l'image
        $imagePath = $request->file('image')->store('service_image','public');
        //creer champ
        $service=Services::create([
            'nom_service' =>$request->nom_service,
            'image' => $imagePath,
            'description' => $request->description,
        ]);
        return response() ->json([
            'message' => 'Champ créé avec succès',
            
           'service'=>$service ,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$slug)
    {
        //
        $services_detail=Services::findOrFail($id);
        if($slug !==Str::slug($services_detail->nom_service)){
            return redirect()->route('detail_service',[
                'id' => $services_detail->id,
                'slug' => Str::slug($services_detail->nom_service)
            ]);
        }
        return view('components.service_detail',compact('services_detail'));

        
      
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
