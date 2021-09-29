<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $testimonial = Testimonial::all();
        return view('testimonials.index', compact('testimonial'));
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
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        Storage::disk("public")->delete('/img/testimonials'.$testimonial->imgpersonne1);
        Storage::disk("public")->delete('/img/testimonials'.$testimonial->imgpersonne2);
        Storage::disk("public")->delete('/img/testimonials'.$testimonial->imgpersonne3);
        Storage::disk("public")->delete('/img/testimonials'.$testimonial->imgpersonne4);
        Storage::disk("public")->delete('/img/testimonials'.$testimonial->imgpersonne5);

        $testimonial->titre = $request->titre;
        $testimonial->description = $request->description;
        $testimonial->icon1 = $request->icon1;
        $testimonial->personne1 = $request->personne1;
        $testimonial->icon2 = $request->icon2;
        $testimonial->imgpersonne1 = $request->file("url")->hashName();
        $testimonial->nompersonne1 = $request->nompersonne1;
        $testimonial->statutpersonne1 = $request->statutpersonne1;

        $testimonial->personne2 = $request->personne2;
        $testimonial->imgpersonne2 = $request->file("url")->hashName();
        $testimonial->nompersonne2 = $request->nompersonne2;
        $testimonial->statutpersonne2 = $request->statutpersonne2;

        $testimonial->personne3 = $request->personne3;
        $testimonial->imgpersonne3 = $request->file("url")->hashName();
        $testimonial->nompersonne3 = $request->nompersonne3;
        $testimonial->statutpersonne3 = $request->statutpersonne3;

        $testimonial->personne4 = $request->personne4;
        $testimonial->imgpersonne4 = $request->file("url")->hashName();
        $testimonial->nompersonne4 = $request->nompersonne4;
        $testimonial->statutpersonne4 = $request->statutpersonne4;

        $testimonial->personne5 = $request->personne5;
        $testimonial->imgpersonne5 = $request->file("url")->hashName();
        $testimonial->nompersonne5 = $request->nompersonne5;
        $testimonial->statutpersonne5 = $request->statutpersonne5;

        $request->save();
        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        Storage::disk("public")->delete('/img/testimonials'.$testimonial->imgpersonne1);
        Storage::disk("public")->delete('/img/testimonials'.$testimonial->imgpersonne2);
        Storage::disk("public")->delete('/img/testimonials'.$testimonial->imgpersonne3);
        Storage::disk("public")->delete('/img/testimonials'.$testimonial->imgpersonne4);
        Storage::disk("public")->delete('/img/testimonials'.$testimonial->imgpersonne5);

        $testimonial->delete();
        return redirect()->route('testimonials.index');
    }
}
