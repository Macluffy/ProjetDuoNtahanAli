<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Feature::all();
        return view('backoffice.backofficefeature.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize("create",feature::class);
        request()->validate([
            "titre"=>["required","min:1" , "max:200" ],
            "paragraphe"=>["required","min:1" , "max:200" ],
            "img1"=>["required","min:1" , "max:200" ],
            "petittitre1"=>["required","min:1" , "max:200" ],
            "petitparagraphe1"=>["required","min:1" , "max:200" ],
            "icon1"=>["required","min:1" , "max:200" ],
            "phrase1"=>["required","min:1" , "max:200" ],
            "phrase2"=>["required","min:1" , "max:200" ],
            "phrase3"=>["required","min:1" , "max:200" ],
            "img2"=>["required","min:1" , "max:200" ],
            "petittitre2"=>["required","min:1" , "max:200" ],
            "petitparagraphe2"=>["required","min:1" , "max:200" ],
            "grosparagraphe2"=>["required","min:1" , "max:200" ],
            "img3"=>["required","min:1" , "max:200" ],
            "petittitre3"=>["required","min:1" , "max:200" ],
            "petitparagraphe3"=>["required","min:1" , "max:200" ],
            "phrase4"=>["required","min:1" , "max:200" ],
            "phrase5"=>["required","min:1" , "max:200" ],
            "phrase6"=>["required","min:1" , "max:200" ],
            "img4"=>["required","min:1" , "max:200" ],
            "petittitre4"=>["required","min:1" , "max:200" ],
            "petitparagraphe4"=>["required","min:1" , "max:00" ],
            "grosparagraphe4"=>["required","min:1" , "max:200" ],

        ]);

        $data = new Feature();
        $data->titre = $request->titre;
        $data->paragraphe = $request->paragraphe;
        $data->img1 = $request->img1;
        $data->petittitre1 = $request->petittitre1;
        $data->petitparagraphe1 = $request->petittitre1;
        $data->icon1 = $request->icon1;
        $data->phrase1 = $request->phrase1;
        $data->phrase2 = $request->phrase2;
        $data->phrase3 = $request->phrase3;
        $data->img2 = $request->img2;
        $data->petittitre2 = $request->petittitre2;
        $data->petitparagraphe2 = $request->petitparagraphe2;
        $data->grosparagraphe2 = $request->grosparagraphe2;
        $data->img3 = $request->img3;
        $data->petittitre3 = $request->petittitre3;
        $data->petitparagraphe3 = $request->petitparagraphe3;
        $data->phrase4 = $request->phrase4;
        $data->phrase5 = $request->phrase5;
        $data->phrase6 = $request->phrase6;
        $data->img4 = $request->img4;
        $data->petittitre4 = $request->petittitre4;
        $data->petitparagraphe4 = $request->petitparagraphe4;
        $data->grosparagraphe4 = $request->grosparagraphe4;
        $data->save();
        

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        return view('backoffice.backofficefeature.show',compact('feature'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        return view('backoffice.backofficefeature.edit',compact('feature'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        // $this->authorize("create",feature::class);
        request()->validate([
            "titre"=>["required","min:1" , "max:200" ],
            "paragraphe"=>["required","min:1" , "max:200" ],
            "img1"=>["required","min:1" , "max:200" ],
            "petittitre1"=>["required","min:1" , "max:200" ],
            "petitparagraphe1"=>["required","min:1" , "max:200" ],
            "icon1"=>["required","min:1" , "max:200" ],
            "phrase1"=>["required","min:1" , "max:200" ],
            "phrase2"=>["required","min:1" , "max:200" ],
            "phrase3"=>["required","min:1" , "max:200" ],
            "img2"=>["required","min:1" , "max:200" ],
            "petittitre2"=>["required","min:1" , "max:200" ],
            "petitparagraphe2"=>["required","min:1" , "max:200" ],
            "grosparagraphe2"=>["required","min:1" , "max:200" ],
            "img3"=>["required","min:1" , "max:200" ],
            "petittitre3"=>["required","min:1" , "max:200" ],
            "petitparagraphe3"=>["required","min:1" , "max:200" ],
            "phrase4"=>["required","min:1" , "max:200" ],
            "phrase5"=>["required","min:1" , "max:200" ],
            "phrase6"=>["required","min:1" , "max:200" ],
            "img4"=>["required","min:1" , "max:200" ],
            "petittitre4"=>["required","min:1" , "max:200" ],
            "petitparagraphe4"=>["required","min:1" , "max:00" ],
            "grosparagraphe4"=>["required","min:1" , "max:200" ],

        ]);

        
        $feature->titre = $request->titre;
        $feature->paragraphe = $request->paragraphe;
        $feature->img1 = $request->img1;
        $feature->petittitre1 = $request->petittitre1;
        $feature->petitparagraphe1 = $request->petittitre1;
        $feature->icon1 = $request->icon1;
        $feature->phrase1 = $request->phrase1;
        $feature->phrase2 = $request->phrase2;
        $feature->phrase3 = $request->phrase3;
        $feature->img2 = $request->img2;
        $feature->petittitre2 = $request->petittitre2;
        $feature->petitparagraphe2 = $request->petitparagraphe2;
        $feature->grosparagraphe2 = $request->grosparagraphe2;
        $feature->img3 = $request->img3;
        $feature->petittitre3 = $request->petittitre3;
        $feature->petitparagraphe3 = $request->petitparagraphe3;
        $feature->phrase4 = $request->phrase4;
        $feature->phrase5 = $request->phrase5;
        $feature->phrase6 = $request->phrase6;
        $feature->img4 = $request->img4;
        $feature->petittitre4 = $request->petittitre4;
        $feature->petitparagraphe4 = $request->petitparagraphe4;
        $feature->grosparagraphe4 = $request->grosparagraphe4;
        $feature->save();
        

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        // $this->authorize("delete",$feature);
        
        // Storage::disk('public')->delete('img/'. $feature->img);
        $feature->delete();
        return redirect()->route('features.index');
    }
    
}
