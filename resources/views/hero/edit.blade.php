@extends('template.welcome')
@section('content')
@if ($errors->any())
<div class="alert alert-danger" >
    <ul>
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    
</div>
@endif
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit Hero</h1>

    <form class="d-flex flex-column" action="{{route('hero.update', $hero->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <span class="fw-bold fs-5">Titre  :</span>  <input class="w-25" value="{{$header->titre}} " type="text" name="titre">
        <span class="fw-bold fs-5">Sous titre :</span> <input class="w-25" value="{{$header->soustitre}} " type="text" name="soustitre">
        <span class="fw-bold fs-5">Bouton start :</span> <input class="w-25" value="{{$header->btnstart}} " type="text" name="btnstart">
        <span class="fw-bold fs-5">Image :</span> <input class="w-25" value="{{$header->img}} " type="file" name="img">
        
        <button type="submit" class="btn btn-info " style="width: 100px; margin:20px;">SAVE</button>
        <a href="{{route('hero.index')}}" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Header a modifier</a>

    </form>
    
    
    



@endsection