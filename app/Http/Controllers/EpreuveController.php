<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EpreuveController extends Controller
{
    /**
     * Affiche la liste des épreuves.
     */
    public function index(): View
    {
        $epreuves = [
            ['numero' => 1001, 'date' => '23/09/2019', 'lieu' => 110],
            ['numero' => 1002, 'date' => '24/09/2019', 'lieu' => 112],
        ];

        return view('affEpreuve')->with('epreuves', $epreuves);
    }
}
