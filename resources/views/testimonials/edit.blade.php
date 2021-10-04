@extends('template.mainbackoffice')
@section('content')
    

<h1 class="text-center back pt-5" style="font-size: 45px">Testimonial Edit</h1>
<form class="formulaire container mt-3 d-flex flex-column w-50" action="{{route('testimonials.update', $testimonial->id)}}" enctype="multipart/form-data" method="post">
    @csrf
    Description Personne: <input class="mt-2" type="text" value="{{$testimonial->personne}}" name="personne">
    Image Personne: <input class="mt-2" type="file" value="{{$testimonial->imgpersonne}}" name="imgpersonne">
    Nom Personne: <input class="mt-2" type="text" value="{{$testimonial->nompersonne}}" name="nompersonne">
    Statut Personne: <input class="mt-2" type="text" value="{{$testimonial->statutpersonne}}" name="statutpersonne">
    @method("PUT")
    <button class="btn btn-primary mt-3" type="submit">Submit</button>

@endsection