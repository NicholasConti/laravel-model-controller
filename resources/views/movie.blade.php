<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>

        {{-- SINGLE MOVIE --}}
       <h1>{{$single_movie->title}}</h1>
       <h1><a href="{{route('home')}}" class="text-decoration-none"><h1><span class="badge bg-primary">HOME</span></h1></a></h1>
            
    </body>
</html>