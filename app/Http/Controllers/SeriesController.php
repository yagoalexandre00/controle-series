<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function index()
    {
        $series = Serie::all();
        return view('series.index', ['series' => $series]);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = new Serie;
        $serie->title = $request->title;
        $serie->genre = $request->genre;
        $serie->platform = $request->platform;
        $serie->year = $request->year;
        $serie->user_id = auth()->user()->id;

        $serie->save();
        return redirect('/series')->with('msg', 'Série adicionada com sucesso!');
    }
}
