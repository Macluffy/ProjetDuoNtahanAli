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
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit Aboutbtn</h1>
    <form class="d-flex flex-column" action="{{route('aboutbtn.update', $aboutbtn->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <span class="fw-bold fs-5">Bouton :</span>  <input class="w-25" value="{{$aboutbtn->btn}} " type="text" name="btn">
    
        

        <button type="submit" class="btn btn-info " style="width: 100px; margin:20px;">SAVE</button>
        <a href="{{route('about.index')}}" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers aboutbtn a modifier</a>

    </form>

    



@endsection