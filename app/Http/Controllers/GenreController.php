<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        $genre = Genre::where("name", $name)->first();

        if ($genre) {
            $movies = $genre->movies()->get();
            $sidebarContent = Movie::orderBy('created_at', 'desc')->take(5)->get(); 
    
            return view('pages.genre', [
                'genre' => $genre,
                'movies' => $movies,
                'sidebar' => $sidebarContent, 
            ]);
        } else {
            return view('genres.not-found');
        }
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
