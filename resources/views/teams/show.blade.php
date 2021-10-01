@extends('template.mainbackoffice')

@section('content')
    
<div class="card mt-5 container" style="width: 40rem;">
    <ul class="list-group list-group-flush text-center">
        <li class="list-group-item my-3">{{ $team->nomteam }}</li>
        <li class="list-group-item mb-3">{{ $team->titreteam }}</li>
        <li class="list-group-item"><img style="width: 100px; height: 100px;" src="{{ asset($team->imgteam) }}" alt=""></li>
        <form action="{{ route('teams.show', $team->id) }}" method="post" class="pt-1 pb-1 my-3 d-flex justify-content-center">
            @method("DELETE")
            <button class="btn btn-danger mx-2" type="submit">Delete</button>
            <a class="btn btn-primary" href="{{ route('teams.edit', $team->id) }}">Edit</a>
        </form>
    </ul>
</div>

@endsection
