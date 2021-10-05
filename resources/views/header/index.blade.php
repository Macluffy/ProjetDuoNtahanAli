@extends('template.mainbackoffice')

@section('content')
<div>
    <h1 class="text-center"  style="padding:100px"> BACK OFFICE | Heeader</h1>
</div>

    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
    @endif
        <!-- ======= Header ======= -->
<header id="header" class="">
    <div class="container d-flex align-items-center justify-content-around">
        
        <h1 class="logo"><a href="nav-link scrollto">{{ $data1[0]->titrenav }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="{{asset('')}}/img/logo.png" alt="" class="img-fluid"></a>-->
        
        <nav id="navbar" class="navbar">
            <ul class="d-flex">
                <li><a class="nav-link scrollto " href="">{{ $data1[0]->link1nav }}</a></li>
                <li><a class="nav-link scrollto" href="">{{ $data1[0]->link2nav }}</a></li>
                <li><a class="nav-link scrollto" href="">{{ $data1[0]->link3nav }}</a></li>
                <li><a class="nav-link scrollto " href="">{{ $data1[0]->link4nav }}</a></li>
                <li><a class="nav-link scrollto" href="">{{ $data1[0]->link5nav }}</a></li>
                <li><a class="nav-link scrollto" href="">{{ $data1[0]->link6nav }}</a></li>
                <li><a class="nav-link scrollto" href="">{{ $data1[0]->btnstartnav }}</a></li>
                <li ><a href="" class="nav-link scrollto">{{ $data1[0]->dashboard }}</a> </li>
                <li><a href="" class="nav-link scrollto">{{ $data1[0]->login }}</a></li>
                <li><a href="" class="nav-link scrollto">{{ $data1[0]->register }}</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        
    </div>
</header><!-- End Header -->
    </div>
    <div
    class="d-flex justify-content-center m-5">
        <a href="{{route('header.edit',$data1[0]->id)}}" class="btn btn-warning">Edit</a>
    </div>
@endsection