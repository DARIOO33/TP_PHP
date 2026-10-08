<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EpreuveController extends Controller
{
    public function index(): View
    {
        // Methode SQL brut
        // $epreuves = DB::select("select * from epreuves");

        // Methode Le générateur de requête fluide
        $epreuves = DB::table('epreuves')->get();

        return view('affEpreuve')->with('epreuves', $epreuves);
    }

    public function store()
    {
        DB::insert("INSERT INTO epreuves (numepreuve, datepreuve, lieu) VALUES (50, '2026-11-15', 'Salle B12')");
    }
}
