@extends('template.mainbackoffice')

@section('content')



    <div class="container d-flex justify-content-center flex-column pt-5 w-25">
        <h1 class="text-center back mb-3" style="font-size: 45px">Testimonials</h1>
        <a href="{{ route('testimonials.create') }}" class="btn btn-success mb-2  text-white">Create</a>
    </div>


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Description Personne </th>
                <th scope="col">Image Personne</th>
                <th scope="col">Nom Personne</th>
                <th scope="col">Statut PErsonne</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonial as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->personne }}</td>
                    <td><img style="width: 50px; height: 50px;" src="{{ asset($data->imgpersonne) }}" alt=""></td>
                    <td>{{ $data->nompersonne }}</td>
                    <td>{{ $data->statutpersonne }}</td>
                    <td class="d-flex">
                        <a href="{{ route('testimonials.edit', $data->id) }}" class="btn btn-info mx-2 my-2">Edit</a>
                        <a href="{{ route('testimonials.show', $data->id) }}" class="btn btn-warning mr-2 my-2">Show</a>

                        <form action="{{ route('testimonials.destroy', $data->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger mx-2 my-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
