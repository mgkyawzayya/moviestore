<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;

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
        $generes = '';
        $data = Movie::findOrFail($id);
        $movie = Movie::find($id, ['action', 'adults', 'animation', 'adventure', 'biography', 'comedy', 'crime', 'documentary', 'drama', 'fantasy', 'family', 'historical', 'horror', 'roma', 'romance', 'scifi', 'sport', 'thriller', 'war']);

        if ($movie->action == 1) {
            $generes .= 'Action,';
        }
        if ($movie->adults == 1) {
            $generes .= ' Adults,';
        }
        if ($movie->animation == 1) {
            $generes .= ' Animation,';
        }
        if ($movie->adventure == 1) {
            $generes .= ' Adventure,';
        }
        if ($movie->biography == 1) {
            $generes .= ' Biography,';
        }
        if ($movie->comedy == 1) {
            $generes .= ' Comedy,';
        }
        if ($movie->crime == 1) {
            $generes .= ' Crime,';
        }
        if ($movie->documentary == 1) {
            $generes .= ' Documentary,';
        }
        if ($movie->drama == 1) {
            $generes .= ' Drama,';
        }
        if ($movie->fantasy == 1) {
            $generes .= ' Fantasy,';
        }
        if ($movie->family == 1) {
            $generes .= ' Family,';
        }
        if ($movie->historical == 1) {
            $generes .= ' Historical,';
        }
        if ($movie->horror == 1) {
            $generes .= ' Horror,';
        }
        if ($movie->roma == 1) {
            $generes .= ' Roma,';
        }
        if ($movie->romance == 1) {
            $generes .= ' Romance,';
        }
        if ($movie->scifi == 1) {
            $generes .= ' Sci-Fi,';
        }
        if ($movie->sport == 1) {
            $generes .= ' Sport,';
        }
        if ($movie->thriller == 1) {
            $generes .= ' Thriller,';
        }
        if ($movie->war == 1) {
            $generes .= ' War,';
        } else {
            $generes .= '';
        }
        $generes = rtrim($generes, ",");
        return view('movie.detail', ['movie' => $data, 'generes' => $generes]);
    }

    public function search(Request $request)
    {
        $title = $request->input('query');
        $movies = Movie::where('title', 'LIKE', '%' . $title . '%')->orderBy('id', 'DESC')->take(40)->paginate(10);

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
        $movie->documentary = $request->has('documentary');
        $movie->drama = $request->has('drama');
        $movie->fantasy = $request->has('fantasy');
        $movie->family = $request->has('family');
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
