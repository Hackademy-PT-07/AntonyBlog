<?php

//$anime = Http::get($endpoint)->json();
//$endpoint = self::BASE_URL . 'anime';

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function genres(){

        $endpoint = 'https://api.jikan.moe/v4/genres/anime';

        $genres = Http::get($endpoint)->json();

        return view('anime.genres', ['genres' => $genres['data']]);
    }

    public function animecategory($id){

        $endpoint = 'https://api.jikan.moe/v4/anime';
        
        $anime = Http::get($endpoint, ['genres' => $id])->json();


        

        

        return view('anime.index', ['anime' => $anime['data']]);

    }
}
