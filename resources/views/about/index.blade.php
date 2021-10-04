@extends('template.mainbackoffice')

@section('content')

<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | About</h1>
<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
    @endif
    
    
    <div><h4>{{ $data4[0]->btn }} <i class="bx bx-chevron-right"></i></h4>
        <div
    class="d-flex justify-content-center m-5">
        <a href="{{route('aboutbtn.show',$data4[0]->id)}}" class="btn btn-success">show</a>
    </div>
    </div>
    
    
    <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
        <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
                @foreach ($data3 as $value)
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="{{ $value->icon1 }}"></i>
                    <h4>{{ $value->petittitre1 }}</h4>
                    <p>{{ $value->petitparagraphe1 }}</p>
                </div>
                <div
                class="d-flex justify-content-center m-5">
                <a href="{{route('about.show',$value->id)}}" class="btn btn-success">Show</a>
            </div>
            @endforeach

            <a href="{{route('about.create')}}" class="btn btn-primary w-25 m-5">Create new</a>
            
        </div>
    </div><!-- End .content-->
</div>

</div>

@endsection