@extends('layout')

@section('title', 'Movies')

@section('content')
    @extends('navbar')

    @foreach ($movies as $movie) 
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"> {{ $movie->title }} </h5>
        <p class="card-text"> {{ $movie->storyline }} </p>
        <a href=" /movies/{{ $movie->id }}" class="btn btn-primary">View</a>
    </div>    
    </div>
    @endforeach

    
@endsection