<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Journal;

class InstitutionalController extends Controller
{
    public function index()
    {
        $albums = Album::with('Photos')->get()->take(4);
        $journals = Journal::latest()->take(4)->get();
        
        $content = array(
            'albums' => $albums,
            'journals' => $journals
        );
        
        return view('institutional')->with($content);
    }

}
