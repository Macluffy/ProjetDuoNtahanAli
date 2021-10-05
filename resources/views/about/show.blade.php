@extends('template.mainbackoffice')

@section('content')
<div>
    <h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Show about </h1>
</div>

<div class="container">
    

    <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
        <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
                
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="{{ $about->icon1 }}"></i>
                    <h4>{{ $about->petittitre1 }}</h4>
                    <p>{{ $about->petitparagraphe1 }}</p>
                </div>
                
                
            </div>
        </div><!-- End .content-->
    </div>
    <div
            class="d-flex justify-content-center m-3">
            <a href="{{route('about.edit',$about->id)}}" class="btn btn-warning">Edit</a>
            <form action="{{route('about.destroy', $about->id)}} " method="POST">
                @csrf
                @method('DELETE')
                    <button type="submit"  class="btn btn-danger"  >DELETE</button>
                    
                </form>
        </div>


</div>

@endsection