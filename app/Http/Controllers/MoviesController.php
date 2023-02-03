<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', ['movies' => $movies]);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $moview = new Movie;
        $moview->title = $request->title;
        $moview->genre = $request->genre;
        $moview->platform = $request->platform;
        $moview->year = $request->year;
        $moview->user_id = auth()->user()->id;

        $moview->save();
        return redirect('/filmes')->with('msg', 'Filme adicionado com sucesso!');
    }
}
