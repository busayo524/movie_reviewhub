<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Dojo;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
      // route --> /movie/
      $movies = Movie::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
      return view('movies.index', ['movies' => $movies]);
      // fetch all records & pass into the index view
    }

    public function show(Movie $movie) {
      // route --> /movies/{id}
      $movie->load('dojo');
      
      return view('movies.show', [ "movie" => $movie ]);
      // fetch a single record & pass into show view
    }

    public function add() {
      // route --> /movies/add
      $dojos = Dojo::all();

      return view('movies.add', [ "dojos" => $dojos ]);
      // render a create view (with web form) to users
    }

    public function store(Request $request) {
      // --> /ninjas/ (POST)
      $validatedData = $request->validate([
          'name' => 'required|string|max:255',
          'rating' => 'required|numeric|min:0|max:10',
          'description' => 'required|string|min:10|max:1000',
          'dojo_id' => 'required|exists:dojos,id',
      ]);

      Movie::create($validatedData);
      return redirect()->route('movies.index')->with('success', 'Movie added successfully!');
      // hanlde POST request to store a new movie record in table
    }

    public function destroy(Movie $movie) {
      // --> /movies/{id} (DELETE)
      $movie->delete();

      return redirect()->route('movies.index')->with('success', 'Movie Review Deleted');
      // handle delete request to delete a movie record from table
    }

}
