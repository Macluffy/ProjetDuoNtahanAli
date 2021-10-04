@extends('template.welcome')

@section('content')
<div>
    <h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Show Feature </h1>
</div>

<div class="container">
    <!-- ======= Features Section ======= -->
    <section id="features" class="features" data-aos="fade-up">
        <div class="container">
            
            
            
            
            
            @if ($feature->icon1 == 'bi bi-check')
            
            <div class="row content">
                <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('img/' . $feature->img1) }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                    <h3>{{ $feature->petittitre1 }}</h3>
                    <p class="fst-italic">
                        {{ $feature->petitparagraphe1 }}
                    </p>
                    <ul>
                        <li><i class="{{ $feature->icon1 }}"></i> {{ $feature->phrase1 }}</li>
                        <li><i class="{{ $feature->icon2 }}"></i>{{ $feature->phrase2 }}</li>
                        <li><i class="{{ $feature->icon3 }}"></i> {{ $feature->phrase3 }}</li>
                    </ul>
                </div>
            </div>
            <div
            class="d-flex justify-content-center m-2">
            <a href="{{route('feature.edit',$feature->id)}}" class="btn btn-warning">Edit</a>
            <form action="{{route('feature.destroy', $feature->id)}} " method="POST">
                @csrf
                @method('DELETE')
                    <button type="submit"  class="btn btn-danger"  >DELETE</button>
                    
                </form>
        </div>
        @else
        <div class="row content bg-secondary">
            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                <img src="{{ asset('img/' . $feature->img1) }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                <h3>{{ $feature->petittitre1 }}</h3>
                <p class="fst-italic">
                    {{ $feature->petitparagraphe1 }}
                </p>
                <p>
                    {{ $feature->phrase1 }}
                    {{ $feature->phrase2 }}
                    {{ $feature->phrase3 }}
                </p>
            </div>
        </div>
        <div
            class="d-flex justify-content-center m-2">
            <a href="{{route('feature.edit',$feature->id)}}" class="btn btn-warning">Edit</a>
            <form action="{{route('feature.destroy', $feature->id)}} " method="POST">
                @csrf
                @method('DELETE')
                    <button type="submit"  class="btn btn-danger"  >DELETE</button>
                    
                </form>
        </div>
        @endif

        
        
        
    </div>
</section><!-- End Features Section -->


</div>

@endsection