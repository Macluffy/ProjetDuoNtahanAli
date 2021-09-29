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
        $footer->nom = $request->nom;
        $footer->adress = $request->adress;
        $footer->ville = $request->ville;
        $footer->tel = $request->tel;
        $footer->numtel = $request->numtel;
        $footer->email = $request->email;
        $footer->emailadress = $request->emailadress;
        $footer->links = $request->links;
        $footer->icon1 = $request->icon1;
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
        $footer->icontwitter = $request->icontwitter;
        $footer->iconfb = $request->iconfb;
        $footer->iconinsta = $request->iconinsta;
        $footer->icongoogleplus = $request->icongoogleplus;
        $footer->iconlinkedin = $request->iconlinkedin;

        $request->save();
        return redirect()->route('footers.index');
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
