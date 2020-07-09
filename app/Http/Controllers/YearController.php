<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class YearController extends Controller
{
    public function index($type)
    {
        $year = date("Y");
        $years = array();
        for ($i = $year; $i > 2015; $i--) {
            $years[] = $i;
        }
        if ($type == 'movie') {
            return view('movie.year.index', ['years' => $years]);
        } else {
            return view('series.year.index', ['years' => $years]);
        }
    }

    public function show($type, $year)
    {
        if ($year == 'older') {
            $movies = Movie::where('type', $type)->where('year', '<=', '2015')->orderBy('id', 'DESC')->paginate(10);
        } else {
            $movies = Movie::where('type', $type)->where('year', $year)->orderBy('id', 'DESC')->paginate(10);
        }

        if ($type == 'movie') {
            return view('movie.year.show', ['movies' => $movies]);
        } else {
            return view('series.year.show', ['movies' => $movies]);
        }
    }
}
