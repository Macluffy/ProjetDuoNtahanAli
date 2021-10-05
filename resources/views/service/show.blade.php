@extends('template.welcome')

@section('content')
<div>
    <h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Show service </h1>
</div>

<div class="container">
    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
            <div class="icon"><i class="{{ $service->icon1 }}"></i></div>
            <h4 class="title"><a href="">{{ $service->link1 }}</a></h4>
            <p class="description">{{ $service->paragraphelink1 }}</p>
        </div>
    </div>
    <div
            class="d-flex justify-content-center m-2">
            <a href="{{route('service.edit',$service->id)}}" class="btn btn-warning">Edit</a>
            <form action="{{route('service.destroy', $service->id)}} " method="POST">
                @csrf
                @method('DELETE')
                    <button type="submit"  class="btn btn-danger"  >DELETE</button>
                    
                </form>
        </div>


</div>

@endsection