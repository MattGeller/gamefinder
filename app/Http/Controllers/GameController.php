<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Store a newly created game in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'nickname' => 'string|max:255',
            'favorite' => 'boolean',
        ]);

        $request->user()->games()->create($validated);

//        return redirect(route('games.index'));
        return true;
    }
}
