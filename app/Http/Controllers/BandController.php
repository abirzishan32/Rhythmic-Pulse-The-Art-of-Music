<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;

class BandController extends Controller
{
    public function store(Request $request)
    {
        $band = Band::create($request->only(['name', 'genre', 'country', 'founding_year', 'description']));


        return redirect('/home')->with('success', 'Event created successfully!');

    }

    public function create()
    {
        $bands = Band::with('albums')->get(); 
        return view('bands', compact('bands'));

    }
    


}
