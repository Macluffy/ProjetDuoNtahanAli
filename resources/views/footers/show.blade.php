@extends('template.mainbackoffice')

@section('content')
    
<div class="card mt-5 container" style="width: 40rem;">
    <ul class="list-group list-group-flush text-center">
        <li class="list-group-item mt-2 pb-3">{{ $footer->nom }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->adress }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->ville }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->tel }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->numtel }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->email }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->emailadress }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->links }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->link1 }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->link2 }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->link3 }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->link4 }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->link5 }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->services }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->link6 }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->link7 }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->link8 }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->link9 }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->link10 }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->newsletter }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->newsletterdescription }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->copy1 }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->copy2 }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->copy3 }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->credits }}</li>
        <li class="list-group-item mt-2 pb-3">{{ $footer->credits2 }}</li>
        <form action="{{ route('footers.show', $footer->id) }}" method="post" class="pt-1 pb-1 my-3 d-flex justify-content-center">
            @method("DELETE")
            <button class="btn btn-danger mx-2" type="submit">Delete</button>
            <a class="btn btn-primary" href="{{ route('footers.edit', $footer->id) }}">Edit</a>
        </form>
    </ul>
</div>

@endsection