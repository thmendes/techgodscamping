<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitutionalController extends Controller
{
    public function index()
    {
        return view('institutional');
    }
}
