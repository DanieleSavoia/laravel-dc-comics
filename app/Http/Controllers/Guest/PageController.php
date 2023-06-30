<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('index', [
            'comics' => $comics,
        ]);
    }
}
