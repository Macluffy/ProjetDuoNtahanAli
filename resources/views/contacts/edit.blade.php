@extends('template.mainbackoffice')
@section('content')
    

<h1 class="text-center mt-5">Contact Edit</h1>
<form class="formulaire container mt-3 d-flex flex-column w-50" action="{{route('contacts.update', $contact->id)}}" enctype="multipart/form-data" method="post">
    @csrf
    Adresse: <input class="mt-2" type="text" value="{{$contact->adress}}" name="adress">
    Rue: <input class="mt-2" type="text" value="{{$contact->rue}}" name="rue">
    Adresse Mail: <input class="mt-2" type="text" value="{{$contact->emailadress}}" name="emailadress">
    Contact Mail: <input class="mt-2" type="text" value="{{$contact->contactadress}}" name="contactadress">
    Telephone General: <input class="mt-2" type="text" value="{{$contact->number1}}" name="number1">
    Telephone Perso: <input class="mt-2" type="text" value="{{$contact->number2}}" name="number2">
    @method("PUT")
    <button class="btn btn-primary mt-3" type="submit">Submit</button>

@endsection