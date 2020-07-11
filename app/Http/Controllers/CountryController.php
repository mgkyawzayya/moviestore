<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CountryController extends Controller
{
    public function index($type)
    {
        $country = ['hollywood', 'bollywood', 'china', 'korea', 'thai', 'japan', 'philippines', 'others'];

        if ($type == 'movie') {
            return view('movie.country.index', ['countries' => $country]);
        } else {
            return view('series.country.index', ['countries' => $country]);
        }
    }

    public function show($type, $country)
    {
        $movies = Movie::where('type', $type)->where('country', $country)->orderBy('id', 'DESC')->paginate(10);

        if ($type == 'movie') {
            return view('movie.country.show', ['movies' => $movies]);
        } else {
            return view('series.country.show', ['movies' => $movies]);
        }
    }
}
