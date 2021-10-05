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
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit Header</h1>

    <form class="d-flex flex-column" action="{{route('header.update', $header->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <span class="fw-bold fs-5">Titre navbar :</span>  <input class="w-25" value="{{$header->titrenav}} " type="text" name="titrenav">
        <span class="fw-bold fs-5">Link 1 navbar :</span> <input class="w-25" value="{{$header->link1nav}} " type="text" name="link1nav">
        <span class="fw-bold fs-5">link 2 navbar :</span> <input class="w-25" value="{{$header->link2nav}} " type="text" name="link2nav">
        <span class="fw-bold fs-5">link 3 navbar :</span> <input class="w-25" value="{{$header->link3nav}} " type="text" name="link3nav">
        <span class="fw-bold fs-5">link 4 navbar :</span> <input class="w-25" value="{{$header->link4nav}} " type="text" name="link4nav">
        <span class="fw-bold fs-5">link 5 navbar :</span> <input class="w-25" value="{{$header->link5nav}} " type="text" name="link5nav">
        <span class="fw-bold fs-5">link 6 navbar :</span> <input class="w-25" value="{{$header->link6nav}} " type="text" name="link6nav">
        <span class="fw-bold fs-5">Bouton start navbar :</span> <input class="w-25" value="{{$header->btnstartnav}} " type="text" name="btnstartnav">
        <span class="fw-bold fs-5">Login :</span> <input class="w-25" value="{{$header->login}} " type="text" name="login">
        <span class="fw-bold fs-5">Register :</span> <input class="w-25" value="{{$header->register}} " type="text" name="register">
        <span class="fw-bold fs-5">Dashboard :</span> <input class="w-25" value="{{$header->dashboard}} " type="text" name="dashboard">
        <button type="submit" class="btn btn-info " style="width: 100px; margin:20px;">SAVE</button>
        <a href="{{route('header.index')}}" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Header a modifier</a>

    </form>
    
    
    



@endsection