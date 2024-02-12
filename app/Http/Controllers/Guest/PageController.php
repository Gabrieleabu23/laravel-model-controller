<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // Esempio di recupero di tutti i film dal database

        return view('pages.index', compact('movies')); // Assicurati di creare la vista corrispondente
    }
}
