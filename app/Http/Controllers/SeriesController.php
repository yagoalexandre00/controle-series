<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function listaSeries()
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
