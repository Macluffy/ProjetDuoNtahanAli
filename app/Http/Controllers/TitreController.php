<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('titre.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Titre::all();
        return view('titre.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize("create",Titre::class);
        request()->validate([
            "titre"=>["required","min:1" , "max:200" ],
            "paragraphe"=>["required","min:1" , "max:200" ],
            

        ]);

        $data = new Titre();
        $data->titre = $request->titre;
        $data->paragraphe = $request->paragraphe;
        
        $data->save();
        

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function show(Titre $titre)
    {
        return view('titre.show',compact('titre'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function edit(Titre $titre)
    {
        return view('titre.edit',compact('titre'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titre $titre)
    {
        // $this->authorize("create",Titre::class);
        request()->validate([
            "titre"=>["required","min:1" , "max:200" ],
            "paragraphe"=>["required","min:1" , "max:200" ],
            

        ]);

       
        $titre->titre = $request->titre;
        $titre->paragraphe = $request->paragraphe;
        
        $titre->save();
        

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titre $titre)
    {
        // $this->authorize("delete",$titre);

        $titre->delete();
        return redirect()->route('titres.index');
    }
}
