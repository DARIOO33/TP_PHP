<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MatController extends Controller
{

    public function index()
    {
        // Methode 1
        // $matieres = DB::select("select * from matieres");

        // Methode 2
        $matieres = DB::table('matieres')->get();

        return view('affMat')->with('matieres', $matieres);
    }

    public function store()
    {
        DB::table('matieres')->insert([
            'codemat' => 8,
            'libelle' => 'prog 2D',
            'coef' => 1.5
        ]);
    }
}
