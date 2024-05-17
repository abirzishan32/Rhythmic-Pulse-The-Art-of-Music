<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create()
    {
        return view('admin/create-news');
    }

    // Store a new news item
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required',
            'image_url' => 'required|image',
            'full_article_link' => 'nullable|url'
        ]);

        $imagePath = $request->file('image_url')->store('public/news_images');

        NewsItem::create([
            'title' => $request->title,
            'summary' => $request->summary,
            'image_url' => $imagePath,
            'full_article_link' => $request->full_article_link
        ]);

        return redirect('/home')->with('success', 'News has been successfully booked!');


    }
}
