@extends('template.mainbackoffice')

@section('content')
    
<div class="card container" style="width: 40rem;">
    <ul class="list-group list-group-flush text-center pt-5">
        <li class="list-group-item my-3">{{ $contact->adress }}</li>
        <li class="list-group-item mb-3">{{ $contact->rue }}</li>
        <li class="list-group-item">{{ $contact->emailadress }}</li>
        <li class="list-group-item">{{ $contact->contactadress }}</li>
        <li class="list-group-item">{{ $contact->number1 }}</li>
        <li class="list-group-item">{{ $contact->number2 }}</li>
        <form action="{{ route('contacts.show', $contact->id) }}" method="post" class="pt-1 pb-1 my-3 d-flex justify-content-center">
            @method("DELETE")
            <button class="btn btn-danger mx-2" type="submit">Delete</button>
            <a class="btn btn-primary" href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
        </form>
    </ul>
</div>

@endsection