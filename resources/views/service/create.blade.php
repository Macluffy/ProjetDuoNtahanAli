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
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit service</h1>

    <form class="d-flex flex-column" action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <span class="fw-bold fs-5">Icon :</span>  <input class="w-25" value="{{old('icon1')}} " type="text" name="icon1">
        <span class="fw-bold fs-5">Link :</span> <input class="w-25" value="{{old('link1')}} " type="text" name="link1">
        <span class="fw-bold fs-5">Paragraphe :</span> <input class="w-25" value="{{old('paragraphelink1')}} " type="text" name="paragraphelink1">
        

        <button type="submit" class="btn btn-info " style="width: 100px; margin:20px;">SAVE</button>
        <a href="{{route('service.index')}}" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers service a modifier</a>

    </form>
    
    
    



@endsection