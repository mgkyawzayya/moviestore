<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CategoryController extends Controller
{
    public function index($type)
    {
        $categories = ['action', 'adults', 'animation', 'adventure', 'biography', 'comedy', 'crime', 'documentary', 'drama', 'fantasy', 'family', 'historical', 'horror', 'roma', 'romance', 'scifi', 'sport', 'thriller', 'war'];
        if ($type == 'movie') {
            return view('movie.category.index', ['categories' => $categories]);
        } else {
            return view('series.category.index', ['categories' => $categories]);
        }
    }

    public function show($type, $category)
    {
        $movies = Movie::where('type', $type)->where($category, 1)->orderBy('id', 'DESC')->paginate(10);

        if ($type == 'movie') {
            $count = Movie::where('type', $type)->where($category, 1)->count();
            return view('movie.category.show', ['movies' => $movies, 'count' => $count, 'category' => $category]);
        } else {
            $count = Movie::where('type', $type)->where($category, 1)->count();
            return view('series.category.show', ['movies' => $movies, 'count' => $count, 'category' => $category]);
        }
    }
}
