<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function home()
    {
        $movies = Movie::all();
        
        // dd($movies);

        return view('home', compact('movies'));
    }
}
