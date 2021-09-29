<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $portfolio = Portfolio::all();
        return view('portfolios.index', compact('portfolio'));
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
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img1);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img2);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img3);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img4);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img5);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img6);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img7);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img8);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img9);

        $portfolio->titre = $request->titre;
        $portfolio->description = $request->description;
        $portfolio->link1 = $request->link1;
        $portfolio->link2 = $request->link2;
        $portfolio->link3 = $request->link3;
        $portfolio->link4 = $request->link4;
        $portfolio->titreimg1 = $request->titreimg1;
        $portfolio->soustitreimg1 = $request->soustitreimg1;
        $portfolio->img1 = $request->file('url')->hashName();
        $portfolio->icon1img = $request->icon1img;
        $portfolio->icon2img = $request->icon2img;
        $portfolio->titreimg2 = $request->titreimg2;
        $portfolio->soustitreimg2 = $request->soustitreimg2;
        $portfolio->img2 = $request->file('url')->hashName();
        $portfolio->titreimg3 = $request->titreimg3;
        $portfolio->soustitreimg3 = $request->soustitreimg3;
        $portfolio->img3 = $request->file('url')->hashName();
        $portfolio->titreimg4 = $request->titreimg4;
        $portfolio->soustitreimg4 = $request->soustitreimg4;
        $portfolio->img4 = $request->file('url')->hashName();
        $portfolio->titreimg5 = $request->titreimg5;
        $portfolio->soustitreimg5 = $request->soustitreimg5;
        $portfolio->img5 = $request->file('url')->hashName();
        $portfolio->titreimg6 = $request->titreimg6;
        $portfolio->soustitreimg6 = $request->soustitreimg6;
        $portfolio->img6 = $request->file('url')->hashName();
        $portfolio->titreimg7 = $request->titreimg7;
        $portfolio->soustitreimg7 = $request->soustitreimg7;
        $portfolio->img7 = $request->file('url')->hashName();
        $portfolio->titreimg8 = $request->titreimg8;
        $portfolio->soustitreimg8 = $request->soustitreimg8;
        $portfolio->img8 = $request->file('url')->hashName();
        $portfolio->titreimg9 = $request->titreimg9;
        $portfolio->soustitreimg9 = $request->soustitreimg9;
        $portfolio->img9 = $request->file('url')->hashName();

        $request->save();
        return redirect()->route('portfolios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img1);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img2);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img3);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img4);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img5);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img6);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img7);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img8);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img9);

        $portfolio->delete();
        return redirect()->route('portfolios.index');
    }
}
