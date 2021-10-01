@extends('template.mainbackoffice')
<h1 class="text-center back pt-5" style="font-size: 45px">Portfolio Edit</h1>
<form class="formulaire container mt-3 d-flex flex-column w-25" action="{{route('portfolios.update', $portfolio->id)}}" enctype="multipart/form-data" method="post">
    @csrf
    Titre Img: <input class="my-2 " type="text" value="{{$portfolio->titreimg}}" name="titreimg">
    Sous-titre Img: <input class="my-2" type="text" value="{{$portfolio->categorie}}" name="categorie">
    Image: <input class="mt-2" type="file" value="{{$portfolio->img}}" name="nompersonne">
    @method("PUT")
    <button class="btn btn-primary mt-3" type="submit">Submit</button>