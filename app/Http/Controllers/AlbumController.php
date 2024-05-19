<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    

    public function create()
    {

        return view('/home');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'release_date' => 'required|date',
            'band_id' => 'required|exists:bands,id'
        ]);

        $album = Album::create($validated);
        return redirect('/home')->with('success', 'Event created successfully!');
    }

}
