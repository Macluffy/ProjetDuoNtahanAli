@extends('template.mainbackoffice')

@section('content')
<div>
    <h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Titre</h1>
</div>

<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
    @endif


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre </th>
                <th scope="col">paragraphe </th>
                <th scope="col">action </th>
            </tr> 
        </thead>
        <tbody>
            @foreach ($titre as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->titre  }}</td>
                    <td>{{ $data->paragraphe }}</td>
                    
                    <td class="d-flex">
                        <a href="{{ route('titres.edit', $data->id) }}" class="btn btn-info mx-2">Edit</a>
                        <a href="{{ route('titres.show', $data->id) }}" class="btn btn-warning mr-2">Show</a>

                        <form action="{{ route('titres.destroy', $data->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger mx-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <H1></H1>


</div>

@endsection