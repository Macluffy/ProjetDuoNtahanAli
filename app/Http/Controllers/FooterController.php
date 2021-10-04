<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $footer = Footer::all();
        return view('footers.index', compact('footer'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        return view("footers.show", compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('footers.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            'nom' => ['required' => 'min:1', 'max:255'],
            'adress' => ['required' => 'min:1', 'max:255'],
            'adress2' => ['required' => 'min:1', 'max:255'],
            'ville' => ['required' => 'min:1', 'max:255'],
            'tel' => ['required' => 'min:1', 'max:255'],
            'numtel' => ['required' => 'min:1', 'max:255'],
            'email' => ['required' => 'min:1', 'max:255'],
            'links' => ['required' => 'min:1', 'max:255'],
            'link1' => ['required' => 'min:1', 'max:255'],
            'link2' => ['required' => 'min:1', 'max:255'],
            'link3' => ['required' => 'min:1', 'max:255'],
            'link4' => ['required' => 'min:1', 'max:255'],
            'link5' => ['required' => 'min:1', 'max:255'],
            'services' => ['required' => 'min:1', 'max:255'],
            'link6' => ['required' => 'min:1', 'max:255'],
            'link7' => ['required' => 'min:1', 'max:255'],
            'link8' => ['required' => 'min:1', 'max:255'],
            'link9' => ['required' => 'min:1', 'max:255'],
            'link10' => ['required' => 'min:1', 'max:255'],
            'newsletter' => ['required' => 'min:1', 'max:255'],
            'newsletterdescription' => ['required' => 'min:1', 'max:255'],
            'copy1' => ['required' => 'min:1', 'max:255'],
            'copy2' => ['required' => 'min:1', 'max:255'],
            'copy3' => ['required' => 'min:1', 'max:255'],
            'credits' => ['required' => 'min:1', 'max:255'],
            'credits2' => ['required' => 'min:1', 'max:255'],
        ]);
        $footer->nom = $request->nom;
        $footer->adress = $request->adress;
        $footer->adress2 = $request->adress2;
        $footer->ville = $request->ville;
        $footer->tel = $request->tel;
        $footer->numtel = $request->numtel;
        $footer->email = $request->email;
        $footer->emailadress = $request->emailadress;
        $footer->links = $request->links;
        $footer->link1 = $request->link1;
        $footer->link2 = $request->link2;
        $footer->link3 = $request->link3;
        $footer->link4 = $request->link4;
        $footer->link5 = $request->link5;
        $footer->services = $request->services;
        $footer->link6 = $request->link6;
        $footer->link7 = $request->link7;
        $footer->link8 = $request->link8;
        $footer->link9 = $request->link9;
        $footer->link10 = $request->link10;
        $footer->newsletter = $request->newsletter;
        $footer->newsletterdescription = $request->newsletterdescription;
        $footer->copy1 = $request->copy1;
        $footer->copy2 = $request->copy2;
        $footer->copy3 = $request->copy3;
        $footer->credits = $request->credits;

        $footer->save();
        return redirect()->route('footers.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();
        return redirect()->route('footers.index');
    }
}
