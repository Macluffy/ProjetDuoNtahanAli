@extends('template.mainbackoffice')
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
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit About</h1>
    <form class="d-flex flex-column" action="{{route('about.update', $about->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <span class="fw-bold fs-5">Icon :</span>  <input class="w-25" value="{{$about->icon1}} " type="text" name="icon1">
        <span class="fw-bold fs-5">Titre :</span> <input class="w-25" value="{{$about->petittitre1}} " type="text" name="petittitre1">
        <span class="fw-bold fs-5">Paragraphe :</span> <input class="w-25" value="{{$about->petitparagraphe1}} " type="text" name="petitparagraphe1">
        

        <button type="submit" class="btn btn-info " style="width: 100px; margin:20px;">SAVE</button>
        <a href="{{route('about.index')}}" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers about a modifier</a>

    </form>

    



@endsection