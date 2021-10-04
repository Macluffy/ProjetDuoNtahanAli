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
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create",Team::class);
        $team = new Team;
        $team->imgteam = $request->file('imgteam')->hashName();
        $team->nomteam = $request->nomteam;
        $team->titreteam = $request->titreteam;

        $team->save();

        $request->file('imgteam')->storePublicly("img/team", "public");

        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('teams.show', compact('team'));
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
        $this->authorize("update",$team);
        $request->validate([
            'personne' => ['required' => 'min:1', 'max:255' ],
            'imgpersonne' => ['required' => 'min:1', 'max:255' ],
            'nompersonne' => ['required' => 'min:1', 'max:255' ],
            'statutpersonne' => ['required' => 'min:1', 'max:255' ]
        ]);
        Storage::disk("public")->delete("/img/team".$team->imgteam);

        $team->imgteam = $request->file('url')->hashName();
        $team->nomteam = $request->nomteam;
        $team->titreteam = $request->titreteam;

        $team->save();
        return redirect()->route('teams.index')->with("message", "Datas has succesfully been changed !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $this->authorize("delete",$team);
        Storage::disk("public")->delete("/img/team".$team->imgteam);

        $team->delete();
        return redirect()->route('teams.index');
    }
}
