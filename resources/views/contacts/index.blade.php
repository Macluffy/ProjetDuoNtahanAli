@extends('template.mainbackoffice')

@section('content')



    <div class="container d-flex justify-content-center flex-column pt-5 w-25">
        <h1 class="text-center back mb-3" style="font-size: 45px">Contact</h1>
    </div>

    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message')}}
        </div>
            
        @endif
    </div>


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Adresse </th>
                <th scope="col">Rue </th>
                <th scope="col">Email</th>
                <th scope="col">Email Pro</th>
                <th scope="col">Numero Privé</th>
                <th scope="col">Numero Société</th>
                <th scope="col">Actions</th>
            </tr> 
        </thead>
        <tbody>
            @foreach ($contact as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->adress  }}</td>
                    <td>{{ $data->rue }}</td>
                    <td>{{ $data->emailadress }}</td>
                    <td>{{ $data->contactadress }}</td>
                    <td>{{ $data->number1 }}</td>
                    <td>{{ $data->number2 }}</td>
                    <td class="d-flex">
                        <a href="{{ route('contacts.edit', $data->id) }}" class="btn btn-info mx-2">Edit</a>
                        <a href="{{ route('contacts.show', $data->id) }}" class="btn btn-warning mr-2">Show</a>

                        <form action="{{ route('contacts.destroy', $data->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger mx-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
