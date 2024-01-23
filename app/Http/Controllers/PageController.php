<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $dati = [
            "trains" => Train::all()->where('Orario_di_partenza', '>', '2024-01-23 00:00:00')
        ];
        return view('home', $dati);
    }
}
