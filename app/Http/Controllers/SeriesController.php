<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
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
        echo $html;
    }
}
