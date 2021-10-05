@extends('template.mainbackoffice')

@section('content')
    
<div class="card  container" style="width: 40rem;">
    <ul class="list-group list-group-flush text-center pt-5">
        <li class="list-group-item my-3 fw-2">{{ $titre->titre }}</li>
        <li class="list-group-item mb-3">{{ $titre->paragraphe }}</li>
        
        <form action="{{ route('titres.show', $titre->id) }}" method="post" class="pt-1 pb-1 my-3 d-flex justify-content-center">
            @method("DELETE")
            <button class="btn btn-danger mx-2" type="submit">Delete</button>
            <a class="btn btn-primary" href="{{ route('titres.edit', $titre->id) }}">Edit</a>
        </form>
    </ul>
</div>

@endsection
