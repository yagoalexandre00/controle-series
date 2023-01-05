<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Termwind\renderUsing;

class SeriesController extends Controller
{
    public function index(Request $request)
    {

        $series = [
            'Brooklin 99',
            'Casamento às Cegas: Brasil',
            'Dahmer: Um Canibal Americano '
        ];

        return view('listar-series', compact('series'));
    }
}
