<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Termwind\renderUsing;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        
        $listaDeSeries = [
            'Brooklin 99',
            'Casamento às Cegas: Brasil',
            'Dahmer: Um Canibal Americano '
        ];

        $html = '<ul>';
        foreach ($listaDeSeries as $series) {
            $html .= "<li>$series</li>";
        }
        $html .= "</ul>";

        return $html;
    }
}
