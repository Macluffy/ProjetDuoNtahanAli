@extends('template.welcome')

@section('content')
<div>
    <h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Show about </h1>
</div>

<div class="container">
    <div> 
        <a href="#" class="about-btn">{{ $aboutbtn->btn }} <i class="bx bx-chevron-right"></i></a>
    </div>
    
    </div>
    <div
            class="d-flex justify-content-center m-3">
            <a href="{{route('aboutbtn.edit',$aboutbtn->id)}}" class="btn btn-warning">Edit</a>
            <form action="{{route('aboutbtn.destroy', $aboutbtn->id)}} " method="POST">
                @csrf
                @method('DELETE')
                    <button type="submit"  class="btn btn-danger"  >DELETE</button>
                    
                </form>
        </div>


</div>

@endsection