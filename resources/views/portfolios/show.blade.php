@extends('template.mainbackoffice')

@section('content')
    
<div class="card  container" style="width: 40rem;">
    <ul class="list-group list-group-flush text-center pt-5">
        <li class="list-group-item my-3">{{ $portfolio->titreimg }}</li>
        <li class="list-group-item mb-3">{{ $portfolio->categorie }}</li>
        <li class="list-group-item d-flex justify-center"><img style="width: 100px; height: 100px;" src="{{ asset($portfolio->img) }}" alt=""></li>
        <form action="{{ route('portfolios.show', $portfolio->id) }}" method="post" class="pt-1 pb-1 my-3 d-flex justify-content-center">
            @method("DELETE")
            <button class="btn btn-danger mx-2" type="submit">Delete</button>
            <a class="btn btn-primary" href="{{ route('portfolios.edit', $portfolio->id) }}">Edit</a>
        </form>
    </ul>
</div>

@endsection
