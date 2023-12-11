<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view("pages.movies", compact("movies"));
    }

    public function showCreateMovie()
    {
        return view('pages.createmovie');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMovieRequest $request)
    {
        $movie = Movie::create($request->all());
        return redirect('/createmovie')->with('status', 'Movie created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::find($id);
        return view('pages.movie', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
