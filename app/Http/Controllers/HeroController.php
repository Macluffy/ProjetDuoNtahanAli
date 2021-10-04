<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data2 = Hero::all();
        return view('hero.index',compact('data2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Hero::all();
        return view('hero.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize("create",Hero::class);
        request()->validate([
            "titre"=>["required","min:1" , "max:200" ],
            "soustitre"=>["required","min:1" , "max:200" ],
            "btnstart"=>["required","min:1" , "max:200" ],
            "img"=>["required","min:1" , "max:200" ],
            

        ]);

        $data = new Hero();
        $data->titre = $request->titre;
        $data->soustitre = $request->soustitre;
        $data->btnstart = $request->btnstart;
        $data->img = $request->file('image')->hashName();
        $data->save();
        $request->file('image')->storePublicly('img','public');
        

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        return view('hero.show',compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        return view('hero.edit',compact('hero'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        // $this->authorize("create",Header::class);
        request()->validate([
            "titre"=>["required","min:1" , "max:200" ],
            "soustitre"=>["required","min:1" , "max:200" ],
            "btnstart"=>["required","min:1" , "max:200" ],
            "img"=>["required","min:1" , "max:200" ],
            
        ]);

        $hero->titre = $request->titre;
        $hero->soustitre = $request->soustitre;
        $hero->btnstart = $request->btnstart;
        $hero->img = $request->file('image')->hashName();
        $hero->save();
        $request->file('image')->storePublicly('img','public');
        Storage::disk('public')->delete('img/'. $hero->img);
        

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        // $this->authorize("delete",$hero);
        
        Storage::disk('public')->delete('img/'. $hero->img);
        $hero->delete();
        return redirect()->route('heros.index');
    }
}
