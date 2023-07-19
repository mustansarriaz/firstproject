<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Image;

class AlbumController extends Controller
{
    public function store(Request $request)
    {
        $album = Album::create(['title' => $request->input('title')]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
            $album->images()->create(['url' => $path]);
        }

        return redirect()->back()->with('success', 'Album created successfully.');
    }
}

