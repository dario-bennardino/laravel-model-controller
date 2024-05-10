@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1>Movies</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">title</th>
                    <th scope="col">original_title</th>
                    <th scope="col">nationality</th>
                    <th scope="col">date</th>
                    <th scope="col">vote</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->id }}</td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->original_title }}</td>
                        <td>{{ $movie->nationality }}</td>
                        <td>{{ $movie->date }}</td>
                        <td>{{ $movie->vote }}</td>

                    </tr>
                @endforeach



            </tbody>
        </table>
    </div>
@endsection
