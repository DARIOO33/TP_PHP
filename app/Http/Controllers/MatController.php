<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MatController extends Controller
{
    /**
     * Affiche la liste des matières.
     */
    public function index(): View
    {
        $matieres = [
            ['code' => 'Algo', 'libelle' => 'Algorithmique', 'coefficient' => 3],
            ['code' => 'DevWeb', 'libelle' => 'Développement Web', 'coefficient' => 3],
        ];

        return view('affMat')->with('matieres', $matieres);
    }
}
