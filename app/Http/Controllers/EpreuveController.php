<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
class EpreuveController extends Controller
{
    /**
     * Affiche la liste des épreuves.
     */
    public function index(): View
    {
        // Methode SQL brut
        // $epreuves = DB::select("select * from epreuves");
        
        
        // Methode Le générateur de requête fluide
        $epreuves = DB::table("matieres")->get();

        return view('affEpreuve')->with('epreuves', $epreuves);
    }
}
