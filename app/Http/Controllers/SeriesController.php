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
}
