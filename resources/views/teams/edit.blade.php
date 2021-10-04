@extends('template.mainbackoffice')
@section('content')
    

<h1 class="text-center back pt-5" style="font-size: 45px">Team Edit</h1>
<form class="formulaire container mt-3 d-flex flex-column w-50" action="{{route('teams.update', $team->id)}}" enctype="multipart/form-data" method="post">
    @csrf
    Nom Personne: <input class="mt-2" type="text" value="{{$team->nomteam}}" name="nomteam">
    Poste Personne: <input class="mt-2" type="text" value="{{$team->titreteam}}" name="titreteam">
    Img Personne: <input class="mt-2" type="file" value="{{$team->imgteam}}" name="imgteam">
    @method("PUT")
    <button class="btn btn-primary mt-3" type="submit">Submit</button>

@endsection