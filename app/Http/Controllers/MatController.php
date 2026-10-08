<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class MatController extends Controller
{
    /**
     * Affiche la liste des matières.
     */
    public function index(): View
    {
        // Methode 1 
        // $matieres = DB::select("select * from matieres");
        
        // Methode 2
        $matieres = DB::table("matieres")->get();

        return view('affMat')->with('matieres', $matieres);
    }
}
