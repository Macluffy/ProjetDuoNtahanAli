@extends('template.welcome')

@section('content')
<div>
    <h1 class="text-center"  style="margin: 150px"> BACK OFFICE | service</h1>
</div>

<div class="container">
    
    @foreach ($data6 as $value)
    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
    <div class="icon-box">
        <div class="icon"><i class="{{ $value->icon1 }}"></i></div>
        <h4 class="title"><a href="">{{ $value->link1 }}</a></h4>
        <p class="description">{{ $value->paragraphelink1 }}</p>
    </div>
</div>





        
            
            <a href="{{route('service.show',$value->id)}}" class="btn btn-success m-3">Show</a>

        
@endforeach


<div>
    <a href="{{route('service.create')}}" class="btn btn-primary  m-5">Create new</a>
</div>
        
</div>       


@endsection