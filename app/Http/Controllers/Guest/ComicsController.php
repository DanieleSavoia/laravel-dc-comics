<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    private $validations = [
        'thumb'           => 'url|max:300',
        'title'        => 'required|string|min:5|max:100',
        'series'          => 'required|string|max:20',
        'description'   => 'string',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validare i dati
        $request->validate($this->validations);

        $data = $request->all(); // estrae i dati che l'utente ha inserito nel form e li mette in un array associativo

        // salvare i dati nel database
        $newComic = new Comic();
        $newComic->thumb          = $data['thumb'];
        $newComic->title       = $data['title'];
        $newComic->series         = $data['series'];
        $newComic->description  = $data['description'];
        $newComic->save();



        // return 'scommentare se serve debuggare questo metodo';
        // return to_route('comics.show', ['comics' => $newComic->id]);
        return redirect()->route('comics.show', ['comics' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
