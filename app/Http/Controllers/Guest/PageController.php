<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // HOMEPAGE
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    // SINGLE MOVIE
    public function show($id)
    {

        $single_movie = Movie::findOrFail($id);

        return view('movie', compact('single_movie'));
    }
}
