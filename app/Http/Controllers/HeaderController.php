<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1 = Header::all();
        return view('header.index',compact('data1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Header::all();
        return view('header.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize("create",Header::class);
        request()->validate([
            "titrenav"=>["required","min:1" , "max:200" ],
            "link1nav"=>["required","min:1" , "max:200" ],
            "link2nav"=>["required","min:1" , "max:200" ],
            "link3nav"=>["required","min:1" , "max:200" ],
            "link4nav"=>["required","min:1" , "max:200" ],
            "link5nav"=>["required","min:1" , "max:200" ],
            "link6nav"=>["required","min:1" , "max:200" ],
            "btnstartnav"=>["required","min:1" , "max:200" ],
            "login"=>["required","min:1" , "max:200" ],
            "register"=>["required","min:1" , "max:200" ],
            "dashboard"=>["required","min:1" , "max:200" ],

        ]);

        $data = new Header();
        $data->titrenav = $request->titrenav;
        $data->link1nav = $request->link1nav;
        $data->link2nav = $request->link2nav;
        $data->link3nav = $request->link3nav;
        $data->link4nav = $request->link4nav;
        $data->link5nav = $request->link5nav;
        $data->link6nav = $request->link6nav;
        $data->btnstartnav = $request->btnstartnav;
        $data->login = $request->login;
        $data->register = $request->register;
        $data->dashboard = $request->dashboard;
        $data->save();
        

        return redirect()->route('header.index')->with('message',"la données a bien été creer");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        return view('header.show',compact('header'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        return view('header.edit',compact('header'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        // $this->authorize("create",Header::class);
        request()->validate([
            "titrenav"=>["required","min:1" , "max:200" ],
            "link1nav"=>["required","min:1" , "max:200" ],
            "link2nav"=>["required","min:1" , "max:200" ],
            "link3nav"=>["required","min:1" , "max:200" ],
            "link4nav"=>["required","min:1" , "max:200" ],
            "link5nav"=>["required","min:1" , "max:200" ],
            "link6nav"=>["required","min:1" , "max:200" ],
            "btnstartnav"=>["required","min:1" , "max:200" ],
            "login"=>["required","min:1" , "max:200" ],
            "register"=>["required","min:1" , "max:200" ],
            "dashboard"=>["required","min:1" , "max:200" ],
        ]);

        $header->titrenav = $request->titrenav;
        $header->link1nav = $request->link1nav;
        $header->link2nav = $request->link2nav;
        $header->link3nav = $request->link3nav;
        $header->link4nav = $request->link4nav;
        $header->link5nav = $request->link5nav;
        $header->link6nav = $request->link6nav;
        $header->btnstartnav = $request->btnstartnav;
        $header->login = $request->login;
        $header->register = $request->register;
        $header->dashboard = $request->dashboard;
        $header->save();
        
        return redirect()->route('header.index')->with('message',"la données est bien modifier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        // $this->authorize("delete",$header);

        $header->delete();
        return redirect()->route('header.index')->with('message',"la données a bien été suprimer");
    }
}
