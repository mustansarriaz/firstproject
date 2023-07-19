<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Image;

class NewsController extends Controller
{
    public function store(Request $request)
    {
        $news = News::create(['title' => $request->input('title')]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
            $news->images()->create(['url' => $path]);
        }

        return redirect()->back()->with('success', 'News created successfully.');
    }
}
