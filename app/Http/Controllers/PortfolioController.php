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
        return view('portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create",Portfolio::class);
        $portfolio = new Portfolio;
        $portfolio->titreimg = $request->titreimg;
        $portfolio->categorie = $request->categorie;
        $portfolio->img = $request->file('img')->hashName();

        $portfolio->save();

        $request->file('img')->storePublicly("img/portfolio", "public");

        return redirect()->route('portfolios.index')->with("message", "Datas has succesfully been created !");

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
        $this->authorize("update",$portfolio);
        $request->validate([
            'titreimg' => ['required' => 'min:1', 'max:255' ],
            'categorie' => ['required' => 'min:1', 'max:255'] ,
            'img' => ['required' => 'min:1', 'max:255']
        ]);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img);

        $portfolio->titreimg = $request->titreimg;
        $portfolio->categorie = $request->categorie;
        $portfolio->img = $request->file('img')->hashName();
        

        $portfolio->save();

        $request->file('img')->storePublicly("img/portfolio", "public");

        return redirect()->route('portfolios.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $this->authorize("delete",$portfolio);
        Storage::disk("public")->delete("/img/portfolio".$portfolio->img);

        $portfolio->delete();
        return redirect()->route('portfolios.index')->with("message", "Datas has succesfully been destroyed !");
    }
}
