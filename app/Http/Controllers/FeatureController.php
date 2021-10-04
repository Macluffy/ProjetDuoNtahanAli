<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data5 = Feature::all();
        return view('feature.index',compact('data5'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $feature = Feature::all();
        return view('feature.create',compact('feature'));
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
            
            "img1"=>["required","min:1" , "max:200" ],
            "petittitre1"=>["required","min:1" , "max:200" ],
            "petitparagraphe1"=>["required","min:1" , "max:200" ],
            
            "phrase1"=>["required","min:1" , "max:200" ],
            "phrase2"=>["required","min:1" , "max:200" ],
            "phrase3"=>["required","min:1" , "max:200" ],
            

        ]);

        $data = new Feature();
        
        $data->img1 =  $request->file('img1')->hashName();
        $data->petittitre1 = $request->petittitre1;
        $data->petitparagraphe1 = $request->petittitre1;
        $data->icon1 = $request->icon1;
        $data->phrase1 = $request->phrase1;
        $data->icon2 = $request->icon2;
        $data->phrase2 = $request->phrase2;
        $data->icon3 = $request->icon3;
        $data->phrase3 = $request->phrase3;
        
        $data->save();
        $request->file('img1')->storePublicly('img','public');
        

        return redirect()->route('index')->with('message',"la données a bien été creer");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        return view('feature.show',compact('feature'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        return view('feature.edit',compact('feature'));

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
            
            "img1"=>["required","min:1" , "max:200" ],
            "petittitre1"=>["required","min:1" , "max:200" ],
            "petitparagraphe1"=>["required","min:1" , "max:200" ],
            "phrase1"=>["required","min:1" , "max:200" ],
            "phrase2"=>["required","min:1" , "max:200" ],
            "phrase3"=>["required","min:1" , "max:200" ],
            
        ]);


        Storage::disk('public')->delete('img/'. $feature->img);
        $feature->img1 = $request->file('img1')->hashName();
        $feature->petittitre1 = $request->petittitre1;
        $feature->petitparagraphe1 = $request->petittitre1;
        $feature->icon1 = $request->icon1;
        $feature->phrase1 = $request->phrase1;
        $feature->icon2 = $request->icon2;
        $feature->phrase2 = $request->phrase2;
        $feature->icon3 = $request->icon3;
        $feature->phrase3 = $request->phrase3;
        $feature->save();
        $request->file('img1')->storePublicly('img','public');
        return redirect()->route('feature.index')->with('message',"la données est bien modifier");
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
        Storage::disk('public')->delete('img/'. $feature->img);
        $feature->delete();
        return redirect()->route('feature.index')->with('message',"la données a bien été suprimer");
    }
    
}
