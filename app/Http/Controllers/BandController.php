<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;

class BandController extends Controller
{
    public function store(Request $request)
    {
        $band = Band::create($request->only(['name', 'genre', 'country', 'founding_year', 'description']));
        // $band->albums()->createMany([
        //     ['title' => $request->input('first_album_title'), 'release_date' => $request->input('first_album_release_date')],
        //     ['title' => $request->input('second_album_title'), 'release_date' => $request->input('second_album_release_date')]
        // ]);

        return redirect('/admin/add-album')->with('success', 'Event created successfully!');

    }

    public function create()
    {

        return view('/admin/add-band');
    }
    


}
