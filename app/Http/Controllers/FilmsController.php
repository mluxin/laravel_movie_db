<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Film;
use App\Genre;
use App\Distributeur;


class FilmsController extends Controller
{
    /**
     * Show the films list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Lazy Loading --> $films = Film::all();
        // eager loading
        $films = Film::with('genre', 'distributeur')->paginate(50);
        return view('films', ['films'=>$films]);
    }

    public function showGenre($id_genre)
    {
        $genre = Genre::find($id_genre);
        return view('genres', ['genre'=>$genre]);
    }

    public function showDistributeur($id_distributeur)
    {
        $distributeur = Distributeur::find($id_distributeur);
        return view('distributeurs', ['distributeur'=>$distributeur]);
    }
}
