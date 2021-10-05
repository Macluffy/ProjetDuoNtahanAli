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
        return view('testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create",Testimonial::class);
        $testimonial = new Testimonial;
        
        $testimonial->personne = $request->personne;
        $testimonial->imgpersonne = $request->file("imgpersonne")->hashName();
        $testimonial->nompersonne = $request->nompersonne;
        $testimonial->statutpersonne = $request->statutpersonne;

        $testimonial->save();

        return redirect()->route('testimonials.index')->with("message", "Datas has succesfully been created !");

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
        $this->authorize("update",$testimonial);
        $request->validate([
            'personne' => ['required' => 'min:1', 'max:1000' ],
            'imgpersonne' => ['required' => 'min:1', 'max:255'] ,
            'nompersonne' => ['required' => 'min:1', 'max:255'],
            'statutpersonne' => ['required' => 'min:1', 'max:255']
        ]);

        Storage::disk("public")->delete('/img/testimonials'.$testimonial->imgpersonne);

        
        $testimonial->personne = $request->personne;
        $testimonial->imgpersonne = $request->file("imgpersonne")->hashName();
        $testimonial->nompersonne = $request->nompersonne;
        $testimonial->statutpersonne = $request->statutpersonne;

        $testimonial->save();

        $request->file('imgpersonne')->storePublicly("img/testimonials", "public");

        return redirect()->route('testimonials.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $this->authorize("delete",$testimonial);
        Storage::disk("public")->delete('/img/testimonials'.$testimonial->imgpersonne);

        $testimonial->delete();
        return redirect()->route('testimonials.index')->with("message", "Datas has succesfully been destroyed !");
    }
}
