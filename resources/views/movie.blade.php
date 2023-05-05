@extends('layouts.app')
@section('title')
{{$single_movie->title}}
@endsection
@section('content')
        {{-- SINGLE MOVIE --}}
       <h1>{{$single_movie->title}}</h1>
       <h1><a href="{{route('home')}}" class="text-decoration-none"><h1><span class="badge bg-primary">HOME</span></h1></a></h1>
            
@endsection