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
<<<<<<< HEAD
    {   
        $titre =  Titre::all();
        return view('titres.index', compact('titre'));
=======
    {
        return view('pages.index');
>>>>>>> 7900c6483a9523505ee4496366d81a277c481561
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        $data = Titre::all();
        return view('pages.titre.create',compact('data'));
>>>>>>> 7900c6483a9523505ee4496366d81a277c481561
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
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
>>>>>>> 7900c6483a9523505ee4496366d81a277c481561
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function show(Titre $titre)
    {
<<<<<<< HEAD
        return view('titres.show', compact('titre'));
=======
        return view('pages.titre.show',compact('titre'));

>>>>>>> 7900c6483a9523505ee4496366d81a277c481561
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function edit(Titre $titre)
    {
<<<<<<< HEAD
        return view('titres.edit', compact('titre'));
=======
        return view('pages.titre.edit',compact('titre'));

>>>>>>> 7900c6483a9523505ee4496366d81a277c481561
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
<<<<<<< HEAD
        $titre->titre3 = $request->titre3;
        $titre->soustitre3 = $request->soustitre3;
        $titre->titre4 = $request->titre4;
        $titre->soustitre4 = $request->soustitre4;
        $titre->titre5 = $request->titre5;
        $titre->soustitre5 = $request->soustitre5;
        $titre->titre6 = $request->titre6;
        $titre->soustitre6 = $request->soustitre6;

        $titre->save();

        return redirect()->route('titres.index');
=======
        // $this->authorize("create",Titre::class);
        request()->validate([
            "titre"=>["required","min:1" , "max:200" ],
            "paragraphe"=>["required","min:1" , "max:200" ],
            

        ]);

       
        $titre->titre = $request->titre;
        $titre->paragraphe = $request->paragraphe;
        
        $titre->save();
        

        return redirect()->route('index');
>>>>>>> 7900c6483a9523505ee4496366d81a277c481561
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titre $titre)
    {
<<<<<<< HEAD
        $titre->delete();
        return redirect()->route("titres.index");
=======
        // $this->authorize("delete",$titre);

        $titre->delete();
        return redirect()->route('titres.index');
>>>>>>> 7900c6483a9523505ee4496366d81a277c481561
    }
}
