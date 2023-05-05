@extends('layouts.app')

@section('title')
    HOME
@endsection
@section('content')
<h1>MY MOVIES</h1>
<div class="row">
   @foreach ($movies as $movie)  {{--EACH MOVIE DB --}}
    <div class="card" style="width: 18rem;">
        <a href="{{route('movie', $movie->id)}}" class="text-decoration-none">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Title: {{ $movie->title}}</li>
            <li class="list-group-item">OG Title: {{ $movie->original_title}}</li>
            <li class="list-group-item">Nationality: {{ $movie->nationality}}</li>
            <li class="list-group-item">Date: {{ $movie->date}}</li>
            <li class="list-group-item">Vote: {{ $movie->vote}}</li>
          </ul>
        </a>
      </div>
    
    @endforeach
</div>        
@endsection
        
    