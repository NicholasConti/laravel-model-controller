<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
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
    </body>
</html>