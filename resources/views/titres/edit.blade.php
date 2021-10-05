@extends('template.mainbackoffice')
@section('content')
    

<h1 class="text-center back pt-5" style="font-size: 45px">Titre Edit</h1>
<form class="formulaire container mt-3 d-flex flex-column w-25" action="{{route('titres.update', $titre->id)}}" enctype="multipart/form-data" method="post">
    @csrf
    Titre : <input class="my-2 " type="text" value="{{$titre->titre}}" name="titre">
    paragraphe : <input class="my-2" type="text" value="{{$titre->paragraphe}}" name="paragraphe">
    
    @method("PUT")
    <button class="btn btn-primary mt-3" type="submit">Submit</button>

    @endsection