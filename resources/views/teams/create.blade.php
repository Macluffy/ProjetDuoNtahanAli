@extends('template.mainbackoffice')
@section('content')
    

<h1 class="text-center back pt-5" style="font-size: 45px">Team Create</h1>
<form class="formulaire container mt-3 d-flex flex-column w-25" action="{{route('teams.store')}}" enctype="multipart/form-data" method="post">
    @csrf
    Image Membre: <input class="mt-2" type="file" value="" name="imgteam">
    Nom Membre: <input class="my-2 " type="text" value="" name="nomteam">
    Poste Membre: <input class="my-2" type="text" value="" name="titreteam">
    
    <button class="btn btn-primary mt-3" type="submit">Submit</button>

@endsection