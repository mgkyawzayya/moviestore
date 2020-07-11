<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
use Illuminate\Support\Facades\Input;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'movies', 'series', 'detail', 'search', 'about']);
    }
    public function index()
    {
        $movies = Movie::orderBy('id', 'DESC')->paginate(10);
        return view('index', ['movies' => $movies]);
    }

    public function movies()
    {
        $movies = Movie::where('type', 'movie')->orderBy('id', 'DESC')->paginate(10);
        $count = Movie::where('type', 'movie')->count();
        return view('movie.index', ['movies' => $movies, 'count' => $count]);
    }
    public function series()
    {
        $movies = Movie::where('type', 'series')->orderBy('id', 'DESC')->paginate(10);
        $count = Movie::where('type', 'series')->count();
        return view('series.index', ['movies' => $movies, 'count' => $count]);
    }

    public function about()
    {
        return view('about');
    }

    public function detail($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.detail', ['movie' => $movie]);
    }

    public function search(Request $request)
    {
        $title = $request->input('query');
        $movies = Movie::where('title', 'LIKE', '%' . $title . '%')->orderBy('id', 'DESC')->take(20)->paginate(10);

        if (count($movies) > 0)
            return view('movie.search')->withDetails($movies)->withQuery($title);
        else return view('movie.search')->withMessage('No Movies found. Try to search again !');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'country' => 'required',
            'year' => 'required',
            'code' => 'required',
            'type' => 'required',
            'size' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);

        $size = substr($request->size, 0, -3);
        if ($size < 100) {
            $update = $size . ' GB';
        } else {
            $update = $size . ' MB';
        }


        $movie = Movie::find($request->id);
        $movie->title = $request->title;
        $movie->country = $request->country;
        $movie->year = $request->year;
        $movie->code = $request->code;
        $movie->type = $request->type;
        $movie->size = $update;
        $movie->action = $request->has('action');
        $movie->adults = $request->has('adults');
        $movie->animation = $request->has('animation');
        $movie->adventure = $request->has('adventure');
        $movie->biography = $request->has('biography');
        $movie->comedy = $request->has('comedy');
        $movie->crime = $request->has('crime');
        $movie->drama = $request->has('drama');
        $movie->fantasy = $request->has('fantasy');
        $movie->historical = $request->has('historical');
        $movie->horror = $request->has('horror');
        $movie->roma = $request->has('roma');
        $movie->romance = $request->has('romance');
        $movie->scifi = $request->has('scifi');
        $movie->sport = $request->has('sport');
        $movie->thriller = $request->has('thriller');
        $movie->war = $request->has('war');
        $movie->description = $request->description;
        $movie->photo = $request->photo;
        $movie->save();
        return redirect('dashboard')->with('success', 'You Updated Movie successfully.');
    }

    public function destroy($id)
    {
        $data = Movie::findOrFail($id);
        $file = $data->photo;
        $filename = public_path() . '/images/' . $file;
        \File::delete($filename);
        $movie = Movie::where('id', $id)->delete();
        return redirect('dashboard');
    }
}
