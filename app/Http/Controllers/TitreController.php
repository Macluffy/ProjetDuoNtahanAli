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
        $titre =  Titre::all();
        return view('titres.index', compact('titre'));
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
        $this->authorize("create",Titre::class);
        request()->validate([
            "titre"=>["required","min:1" , "max:200" ],
            "paragraphe"=>["required","min:1" , "max:200" ],
            

        ]);

        $data = new Titre();
        $data->titre = $request->titre;
        $data->paragraphe = $request->paragraphe;
        
        $data->save();
        

        return redirect()->route('titres.index')->with('message',"la données a bien été creer");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function show(Titre $titre)
    {
        return view('titres.show', compact('titre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function edit(Titre $titre)
    {
        return view('titres.edit', compact('titre'));
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
        $this->authorize("update",$titre);
        request()->validate([
            "titre"=>["required","min:1" , "max:200" ],
            "paragraphe"=>["required","min:1" , "max:200" ],
        ]);

        $titre->titre = $request->titre;
        $titre->paragraphe = $request->paragraphe;
        
        $titre->save();
        

        return redirect()->route('titres.index')->with('message',"la données est bien modifier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titre $titre)
    {
        $this->authorize("delete",$titre);
        $titre->delete();
        return redirect()->route("titres.index")->with('message',"la données est bien supprimer");
    }
}
