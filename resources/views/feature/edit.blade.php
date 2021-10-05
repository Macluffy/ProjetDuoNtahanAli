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
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit feature</h1>
@if ($feature->icon1 == 'bi bi-check')
    <form class="d-flex flex-column" action="{{route('feature.update', $feature->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <span class="fw-bold fs-5">Image :</span>  <input class="w-25" value="{{$feature->img1}} " type="file" name="img1">
        <span class="fw-bold fs-5">Titre :</span> <input class="w-25" value="{{$feature->petittitre1}} " type="text" name="petittitre1">
        <span class="fw-bold fs-5">Paragraphe :</span> <input class="w-25" value="{{$feature->petitparagraphe1}} " type="text" name="petitparagraphe1">
        <span class="fw-bold fs-5">Icon 1 :</span> <input class="w-25" value="{{$feature->icon1}} " type="text" name="icon1">
        <span class="fw-bold fs-5">Phrase 1 :</span> <input class="w-25" value="{{$feature->phrase1}} " type="text" name="phrase1">
        <span class="fw-bold fs-5">Icon 2 :</span> <input class="w-25" value="{{$feature->icon2}} " type="text" name="icon2">
        <span class="fw-bold fs-5">phrase 2 :</span> <input class="w-25" value="{{$feature->phrase2}} " type="text" name="phrase2">
        <span class="fw-bold fs-5">Icon 3 :</span> <input class="w-25" value="{{$feature->icon3}} " type="text" name="icon3">
        <span class="fw-bold fs-5">Phrase 3 :</span> <input class="w-25" value="{{$feature->phrase3}} " type="text" name="phrase3">

        <button type="submit" class="btn btn-info " style="width: 100px; margin:20px;">SAVE</button>
        <a href="{{route('feature.index')}}" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers feature a modifier</a>

    </form>
    @else
    <form class="d-flex flex-column" action="{{route('feature.update', $feature->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <span class="fw-bold fs-5">Image :</span>  <input class="w-25" value="{{$feature->img1}} " type="file" name="img1">
        <span class="fw-bold fs-5">Titre :</span> <input class="w-25" value="{{$feature->petittitre1}} " type="text" name="petittitre1">
        <span class="fw-bold fs-5">Paragraphe :</span> <input class="w-25" value="{{$feature->petitparagraphe1}} " type="text" name="petitparagraphe1">
        <span class="fw-bold fs-5">Phrase 1 :</span> <input class="w-25" value="{{$feature->phrase1}} " type="text" name="phrase1">
        <span class="fw-bold fs-5">phrase 2 :</span> <input class="w-25" value="{{$feature->phrase2}} " type="text" name="phrase2">
        <span class="fw-bold fs-5">Phrase 3 :</span> <input class="w-25" value="{{$feature->phrase3}} " type="text" name="phrase3">

        <button type="submit" class="btn btn-info " style="width: 100px; margin:20px;">SAVE</button>
        <a href="{{route('feature.index')}}" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers feature a modifier</a>

    </form>
    @endif
    
    



@endsection