<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Aboutbtn;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data3 = About::all();
        $data4 = Aboutbtn::all();
        return view('about.index',compact('data3','data4'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = About::all();
        return view('about.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create",About::class);
        request()->validate([
            
            "icon1"=>["required","min:1" , "max:200" ],
            "petittitre1"=>["required","min:1" , "max:200" ],
            "petitparagraphe1"=>["required","min:1" , "max:200" ],
            

        ]);

        $data = new About();
        
        
        $data->icon1 = $request->icon1;
        $data->petittitre1 = $request->petittitre1;
        $data->petitparagraphe1 = $request->petitparagraphe1;
        
        $data->save();
        

        return redirect()->route('about.index')->with('message',"la données a bien été creer");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        $data4 = Aboutbtn::all();
        return view('about.show',compact('about','data4'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $data4 = Aboutbtn::all();
        return view('about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $this->authorize("update",$about);
        request()->validate([
            
            "icon1"=>["required","min:1" , "max:200" ],
            "petittitre1"=>["required","min:1" , "max:200" ],
            "petitparagraphe1"=>["required","min:1" , "max:200" ],
            

        ]);

        
        
        $about->icon1 = $request->icon1;
        $about->petittitre1 = $request->petittitre1;
        $about->petitparagraphe1 = $request->petitparagraphe1;
        
        $about->save();
        

        return redirect()->route('about.index')->with('message',"la données est bien modifier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $this->authorize("delete",$about);
        $about->delete();
        return redirect()->route('about.index')->with('message',"la données a bien été suprimer");
    }
}

