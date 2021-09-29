<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('teams.index', compact('team'));
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
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('teams.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        Storage::disk("public")->delete("/img/team".$team->imgteam1);
        Storage::disk("public")->delete("/img/team".$team->imgteam2);
        Storage::disk("public")->delete("/img/team".$team->imgteam3);
        Storage::disk("public")->delete("/img/team".$team->imgteam4);

        $team->titre = $request->titre;
        $team->description = $request->description;
        $team->imgteam1 = $request->file('url')->hashName();
        $team->nomteam1 = $request->nomteam1;
        $team->titreteam1 = $request->titreteam1;
        $team->icon1 = $request->icon1;
        $team->icon2 = $request->icon2;
        $team->icon3 = $request->icon3;
        $team->icon4 = $request->icon4;
        $team->imgteam2 = $request->file('url')->hashName();
        $team->nomteam2 = $request->nomteam2;
        $team->titreteam2 = $request->titreteam2;
        $team->imgteam3 = $request->file('url')->hashName();
        $team->nomteam3 = $request->nomteam3;
        $team->titreteam3 = $request->titreteam3;
        $team->imgteam4 = $request->file('url')->hashName();
        $team->nomteam4 = $request->nomteam4;
        $team->titreteam4 = $request->titreteam4;

        $request->save();
        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        Storage::disk("public")->delete("/img/team".$team->imgteam1);
        Storage::disk("public")->delete("/img/team".$team->imgteam2);
        Storage::disk("public")->delete("/img/team".$team->imgteam3);
        Storage::disk("public")->delete("/img/team".$team->imgteam4);

        $team->delete();
        return redirect()->route('teams.index');
    }
}
