<?php
namespace App\Http\Controllers;

class SeriesController
{
    public function listarSeries()
    {
        $series = [
            'Breaking Bad',
            'Game of Thrones',
            'Stranger Things',
            'The Witcher',
            'The Office',
            'Grey\'s Anatomy',
            'The Crown',
        ];

        $html = '<ul>';
        foreach ($series as $serie) { 
            $html .= "<li>$serie</li>";
        }

        $html .= '</ul>';

        echo $html;
    }
}