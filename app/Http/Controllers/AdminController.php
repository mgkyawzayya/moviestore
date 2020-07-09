<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $movies = Movie::orderBy('id', 'DESC')->paginate(20);
        return view('admin.index', ['movies' => $movies]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
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
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);
        if ($request->hasFile('photo')) {

            $image       = $request->file('photo');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/'), $name);

            if ($request->size < 100) {
                $size = $request->size . ' GB';
            } else {
                $size = $request->size . ' MB';
            }

            $movie = new Movie();
            $movie->title = $request->title;
            $movie->country = $request->country;
            $movie->year = $request->year;
            $movie->code = $request->code;
            $movie->type = $request->type;
            $movie->size = $size;
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
            $movie->photo = $name;
            $movie->save();

            return redirect('dashboard')->with('success', 'You Create Movie successfully.');
        }
    }

    public function edit($id)
    {
        $movie = Movie::find($id);

        return view('admin.edit')->with('movie', $movie);
    }
}
