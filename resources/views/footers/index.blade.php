@extends('template.mainbackoffice')

@section('content')



    <div class="container d-flex justify-content-center flex-column mt-5 w-25">
        <h1 class="text-center">Contact</h1>
        <a href="{{ route('contacts.create') }}" class="btn btn-success mb-2 mt-2 text-white">Create</a>
    </div>


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom </th>
                <th scope="col">Adresse </th>
                <th scope="col">Ville</th>
                <th scope="col">Telephone</th>
                <th scope="col">Num Tel</th>
                <th scope="col">Email</th>
                <th scope="col">Adresse Email</th>
                <th scope="col">Links</th>
                <th scope="col">Link 1</th>
                <th scope="col">Link 2</th>
                <th scope="col">Link 3</th>
                <th scope="col">Link 4</th>
                <th scope="col">Link 5</th>
                <th scope="col">Services</th>
                <th scope="col">Link 6</th>
                <th scope="col">Link 7</th>
                <th scope="col">Link 8</th>
                <th scope="col">Link 9</th>
                <th scope="col">Link 10</th>
                <th scope="col">Newsletter</th>
                <th scope="col">Text Newsletter</th>
                <th scope="col">Copyright 1</th>
                <th scope="col">Copyright 2</th>
                <th scope="col">Copyright 3</th>
                <th scope="col">Credits 1</th>
                <th scope="col">Credits 2</th>
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
