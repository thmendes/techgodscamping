<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class InstitutionalController extends Controller
{
    public function index()
    {
        $albums = Album::with('Photos')->get();
        
        return view('institutional')->with('albums', $albums);
    }
}
