@extends('template.mainbackoffice')
@section('content')
    

<h1 class="text-center back pt-5" style="font-size: 45px">Testimonial Create</h1>
<form class="formulaire container mt-3 d-flex flex-column w-25" action="{{route('testimonials.store')}}" enctype="multipart/form-data" method="post">
    @csrf
    Commentaire Personne: <input class="my-2" type="text" value="" name="personne">
    Image Personne: <input class="mt-2" type="file" value="" name="imgpersonne">
    Nom Personne: <input class="my-2 " type="text" value="" name="nompersonne">
    Statut Personne: <input class="my-2" type="text" value="" name="statutpersonne">
    
    <button class="btn btn-primary mt-3" type="submit">Submit</button>

@endsection