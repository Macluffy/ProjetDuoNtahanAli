@extends('template.mainbackoffice')

@section('content')



    <div class="container d-flex justify-content-center flex-column mt-5 w-25">
        <h1 class="text-center">Portfolio</h1>
        <a href="{{ route('portfolios.create') }}" class="btn btn-success mb-2 mt-2 text-white">Create</a>
    </div>


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre Img </th>
                <th scope="col">Categorie </th>
                <th scope="col">Img</th>

                <th scope="col">Actions</th>
            </tr> 
        </thead>
        <tbody>
            @foreach ($portfolio as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->titreimg  }}</td>
                    <td>{{ $data->categorie }}</td>
                    <td><img style="width: 35px; height: 35px;" src="{{asset($data->img)}}" alt=""></td>
                    <td class="d-flex">
                        <a href="{{ route('portfolios.edit', $data->id) }}" class="btn btn-info mx-2">Edit</a>
                        <a href="{{ route('portfolios.show', $data->id) }}" class="btn btn-warning mr-2">Show</a>

                        <form action="{{ route('portfolios.destroy', $data->id) }}" method="post">
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
