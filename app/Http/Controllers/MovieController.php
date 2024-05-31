<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'thumb' => 'url|nullable',
            'director' => 'max:50|required',
            'release_date' => 'required|date|date_format:Y-m-d',
            'vote' => 'nullable|numeric|min:0|max:5'
        ]);
        
        $form_data = $request->all();

        // dd($form_data);

        $new_movie = Movie::create($form_data);


        return to_route('movies.show', $new_movie);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        
        return view('movies.show', compact('movie'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
