<?php

namespace App\Http\Controllers;

use App\Models\About;
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
        return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = About::all();
        return view('backoffice.backofficeabout.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize("create",about::class);
        request()->validate([
            "titre"=>["required","min:1" , "max:200" ],
            "paragraphe"=>["required","min:1" , "max:200" ],
            "link"=>["required","min:1" , "max:200" ],
            "icon1"=>["required","min:1" , "max:200" ],
            "petittitre1"=>["required","min:1" , "max:200" ],
            "petitparagraphe1"=>["required","min:1" , "max:200" ],
            "icon2"=>["required","min:1" , "max:200" ],
            "petittitre2"=>["required","min:1" , "max:200" ],
            "petitparagraphe2"=>["required","min:1" , "max:200" ],
            "icon3"=>["required","min:1" , "max:200" ],
            "petittitre3"=>["required","min:1" , "max:200" ],
            "petitparagraphe3"=>["required","min:1" , "max:200" ],
            "icon4"=>["required","min:1" , "max:200" ],
            "petittitre4"=>["required","min:1" , "max:200" ],
            "petitparagraphe4"=>["required","min:1" , "max:200" ],

        ]);

        $data = new About();
        $data->titre = $request->titre;
        $data->paragraphe = $request->paragraphe;
        $data->link = $request->link;
        $data->icon1 = $request->icon1;
        $data->petittitre1 = $request->petittitre1;
        $data->petitparagraphe1 = $request->petitparagraphe1;
        $data->icon2 = $request->icon2;
        $data->petittitre2 = $request->petittitre2;
        $data->petitparagraphe2 = $request->petitparagraphe2;
        $data->icon3 = $request->icon3;
        $data->petittitre3 = $request->petittitre3;
        $data->petitparagraphe3 = $request->petitparagraphe3;
        $data->icon4 = $request->icon4;
        $data->petittitre4 = $request->petittitre4;
        $data->petitparagraphe4 = $request->petitparagraphe4;
        $data->save();
        

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('backoffice.backofficeabout.show',compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('backoffice.backofficeabout.show',compact('about'));
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
        // $this->authorize("update",about::class);
        request()->validate([
            "titre"=>["required","min:1" , "max:200" ],
            "paragraphe"=>["required","min:1" , "max:200" ],
            "link"=>["required","min:1" , "max:200" ],
            "icon1"=>["required","min:1" , "max:200" ],
            "petittitre1"=>["required","min:1" , "max:200" ],
            "petitparagraphe1"=>["required","min:1" , "max:200" ],
            "icon2"=>["required","min:1" , "max:200" ],
            "petittitre2"=>["required","min:1" , "max:200" ],
            "petitparagraphe2"=>["required","min:1" , "max:200" ],
            "icon3"=>["required","min:1" , "max:200" ],
            "petittitre3"=>["required","min:1" , "max:200" ],
            "petitparagraphe3"=>["required","min:1" , "max:200" ],
            "icon4"=>["required","min:1" , "max:200" ],
            "petittitre4"=>["required","min:1" , "max:200" ],
            "petitparagraphe4"=>["required","min:1" , "max:200" ],

        ]);

        
        $about->titre = $request->titre;
        $about->paragraphe = $request->paragraphe;
        $about->link = $request->link;
        $about->icon1 = $request->icon1;
        $about->petittitre1 = $request->petittitre1;
        $about->petitparagraphe1 = $request->petitparagraphe1;
        $about->icon2 = $request->icon2;
        $about->petittitre2 = $request->petittitre2;
        $about->petitparagraphe2 = $request->petitparagraphe2;
        $about->icon3 = $request->icon3;
        $about->petittitre3 = $request->petittitre3;
        $about->petitparagraphe3 = $request->petitparagraphe3;
        $about->icon4 = $request->icon4;
        $about->petittitre4 = $request->petittitre4;
        $about->petitparagraphe4 = $request->petitparagraphe4;
        $about->save();
        

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        // $this->authorize("delete",$about);

        $about->delete();
        return redirect()->route('abouts.index');
    }
}
