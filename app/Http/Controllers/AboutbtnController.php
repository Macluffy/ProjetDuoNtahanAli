<?php

namespace App\Http\Controllers;

use App\Models\Aboutbtn;
use Illuminate\Http\Request;

class AboutbtnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('about.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Aboutbtn::all();
        return view('aboutbtn.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize("create",aboutbtn::class);
        request()->validate([
            "btn"=>["required","min:1" , "max:200" ],
            
            

        ]);

        $data = new Aboutbtn();
        $data->btn = $request->btn;
        
        
        $data->save();
        

        return redirect()->route('about.index')->with('message',"la données a bien été creer");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aboutbtn  $aboutbtn
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutbtn $aboutbtn)
    {
        return view('aboutbtn.show',compact('aboutbtn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboutbtn  $aboutbtn
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutbtn $aboutbtn)
    {
        return view('aboutbtn.edit',compact('aboutbtn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutbtn  $aboutbtn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutbtn $aboutbtn)
    {
        $this->authorize("update",$aboutbtn);
        request()->validate([
            "btn"=>["required","min:1" , "max:200" ],
            
            

        ]);

        
        $aboutbtn->btn = $request->btn;
        
        
        $aboutbtn->save();
        

        return redirect()->route('about.index')->with('message',"la données est bien modifier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutbtn  $aboutbtn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutbtn $aboutbtn)
    {
        $this->authorize("delete",$aboutbtn);

        $aboutbtn->delete();
        return redirect()->route('about.index');
    }
}
