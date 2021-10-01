@extends('template.mainbackoffice')
@section('content')
    

<h1 class="text-center mt-5">Footer Edit</h1>
<form class="formulaire container mt-3 d-flex flex-column w-50" action="{{route('footers.update', $footer->id)}}" enctype="multipart/form-data" method="post">
    @csrf
    Nom Entreprise: <input class="mt-2" type="text" value="{{$footer->nom}}" name="nom">
    Adresse: <input class="mt-2" type="text" value="{{$footer->adress}}" name="adress">
    Ville: <input class="mt-2" type="text" value="{{$footer->ville}}" name="ville">
    Tel: <input class="mt-2" type="text" value="{{$footer->tel}}" name="tel">
    Num Tel: <input class="mt-2" type="text" value="{{$footer->numtel}}" name="numtel">
    Email: <input class="mt-2" type="text" value="{{$footer->email}}" name="email">
    Adresse Mail: <input class="mt-2" type="text" value="{{$footer->emailadress}}" name="emailadress">
    Links: <input class="mt-2" type="text" value="{{$footer->links}}" name="links">
    Link 1: <input class="mt-2" type="text" value="{{$footer->link1}}" name="link1">
    Link 2: <input class="mt-2" type="text" value="{{$footer->link2}}" name="link2">
    Link 3: <input class="mt-2" type="text" value="{{$footer->link3}}" name="link3">
    Link 4: <input class="mt-2" type="text" value="{{$footer->link4}}" name="link4">
    Link 5: <input class="mt-2" type="text" value="{{$footer->link5}}" name="link5">
    Services: <input class="mt-2" type="text" value="{{$footer->services}}" name="services">
    Link 6: <input class="mt-2" type="text" value="{{$footer->link6}}" name="link6">
    Link 7: <input class="mt-2" type="text" value="{{$footer->link7}}" name="link7">
    Link 8: <input class="mt-2" type="text" value="{{$footer->link8}}" name="link8">
    Link 9: <input class="mt-2" type="text" value="{{$footer->link9}}" name="link9">
    Link 10: <input class="mt-2" type="text" value="{{$footer->link10}}" name="link10">
    Newsletter: <input class="mt-2" type="text" value="{{$footer->newsletter}}" name="newsletter">
    Description Newsletter: <input class="mt-2" type="text" value="{{$footer->newsletterdescription}}" name="newsletterdescription">
    Copyright Partie 1: <input class="mt-2" type="text" value="{{$footer->copy1}}" name="copy1">
    Copyright Partie 2: <input class="mt-2" type="text" value="{{$footer->copy2}}" name="copy2">
    Copyright Partie 3: <input class="mt-2" type="text" value="{{$footer->copy3}}" name="copy3">
    Credits: <input class="mt-2" type="text" value="{{$footer->credits}}" name="credits">
    Credits2: <input class="mt-2" type="text" value="{{$footer->credits2}}" name="credits2">
    @method("PUT")
    <button class="btn btn-primary mt-3 mb-5" type="submit">Submit</button>

@endsection