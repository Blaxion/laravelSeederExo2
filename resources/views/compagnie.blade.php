@extends('layout.index')
@section('main')
    <a class="btn btn-success" href="compagnie/create">CREATE</a>
    <form action="compagnie/wipe" method='POST'>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger ">Delete All</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Adress</th>
                <th scope="col">Email</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Contact Name</th>
                <th scope="col">Contact Last Name</th>
                <th scope="col">Utilities</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compagnies as $compagnie)
                <tr>
                    <th scope="row">{{ $compagnie->id }}</th>
                    <td>{{ $compagnie->name }}</td>
                    <td>{{ $compagnie->adress }}</td>
                    <td>{{ $compagnie->mail }}</td>
                    <td>{{ $compagnie->phone }}</td>
                    <td>{{ $compagnie->contactname }}</td>
                    <td>{{ $compagnie->contactlastname }}</td>
                    <td><img src="{{asset('img/'.$compagnie->img)}}" alt=""></td>
                    <td>
                        <a class="btn btn-info " href="compagnie/{{ $compagnie->id }}">SHOW</a>
                        <form action="compagnie/{{ $compagnie->id }}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ">DELETE</button>
                        </form>
                        <a class="btn btn-warning " href="compagnie/{{ $compagnie->id }}/edit">EDIT</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
