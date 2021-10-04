@extends('template.welcome')

@section('content')
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Hero</h1>
    <div class="container">
        <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center bg-secondary">
    
    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
        <h1>{{ $data2[0]->titre }}</h1>
        <h2>{{ $data2[0]->soustitre }}</h2>
        <a href="#about" class="btn-get-started scrollto">{{ $data2[0]->btnstart }}</a>
        <img src="{{asset('img/'. $data2[0]->img )}}" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>
    
</section><!-- End Hero -->

    </div>
    <div
    class="d-flex justify-content-center m-5">
        <a href="{{route('hero.edit',$data2[0]->id)}}" class="btn btn-warning">Edit</a>
    </div>
@endsection