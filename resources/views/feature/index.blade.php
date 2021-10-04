@extends('template.mainbackoffice')

@section('content')
<div>
    <h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Feature</h1>
</div>

<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
    @endif
    <!-- ======= Features Section ======= -->
    <div class="w-100 f-flex justify-content-center m-5">
        
        <a class="text-center" href="{{route('feature.create')}} " style="width:200px;  background-color: rgb(2, 83, 189); padding: 20px; color:white;" >Creer</a>

    </div>
    <section id="features" class="features" data-aos="fade-up">
        <div class="container">
            
            @php
            $i = 1;
            @endphp
            
            @foreach ($data5 as $value)
            
            @if ($i % 2)
            
            <div class="row content">
                <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('img/' . $value->img1) }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                    <h3>{{ $value->petittitre1 }}</h3>
                    <p class="fst-italic">
                        {{ $value->petitparagraphe1 }}
                    </p>
                    <ul>
                        <li><i class="{{ $value->icon1 }}"></i> {{ $value->phrase1 }}</li>
                        <li><i class="{{ $value->icon2 }}"></i>{{ $value->phrase2 }}</li>
                        <li><i class="{{ $value->icon3 }}"></i> {{ $value->phrase3 }}</li>
                    </ul>
                </div>
            </div>
            <div
            class="d-flex justify-content-center m-2">
            <a href="{{route('feature.show',$value->id)}}" class="btn btn-success">Show</a>
            
        </div>
        @else
        <div class="row content">
            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                <img src="{{ asset('img/' . $value->img1) }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                <h3>{{ $value->petittitre1 }}</h3>
                <p class="fst-italic">
                    {{ $value->petitparagraphe1 }}
                </p>
                <p>
                    {{ $value->phrase1 }}
                    {{ $value->phrase2 }}
                    {{ $value->phrase3 }}
                </p>
            </div>
        </div>
        <div
            class="d-flex justify-content-center m-2">
            <a href="{{route('feature.show',$value->id)}}" class="btn btn-success">Show</a>

        </div>



        @endif
        @php
        $i++;
        @endphp
        @endforeach
        
    </div>
</section><!-- End Features Section -->



</div>

@endsection