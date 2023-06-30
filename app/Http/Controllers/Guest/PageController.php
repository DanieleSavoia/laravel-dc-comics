<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {

        $comics = Comic::all();
        return view('index', compact('comics'));
    }
    public function show($id)
    {
        //return 'sono la pagina di dettaglio del fumetto con id' . $id;
        $comics = Comic::FindOrFail($id);
        return view('show', compact('comics'));
    }
}
