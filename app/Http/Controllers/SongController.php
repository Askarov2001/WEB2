<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Song;

class SongController extends Controller
{
    public function index(){
        $songs = Song::all();

        return view('song.index')->with(['songs' => $songs]);

    }

    public function store(Request $request){
        Song::create([
            'name'=> $request->name,
            'singer'=> $request->singer,
            'year'=> $request->year
        ]);
        return back();
    }
}
