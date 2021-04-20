@extends('layout')

@section('title', 'Movies')

@section('content')
    @extends('navbar')
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h2 class="card-title"> {{ $movie->title }} </h2>
        <h4 class="card-title"> {{ $movie->director }} </h4>
        <h5 class="card-title"> {{ $movie->year }} </h5>
        <p class="card-text"> {{ $movie->storyline }} </p>
    </div>    
    </div>

    
@endsection