<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;

class BandController extends Controller
{
    public function store(Request $request)
    {
        $band = Band::create($request->only(['name', 'genre', 'country', 'founding_year', 'description']));


        return redirect('/admin/add-album')->with('success', 'Band created successfully!');

    }

    public function create()
{
    $bands = Band::with('albums')->get();
    return view('/bands', compact('bands'));
}

public function create_admin()
{
    $bands = Band::with('albums')->get();
    return view('/admin/add-band', compact('bands'));
}


}
