<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Request $request)
    {
        $request->user()->authorizeRoles(['camper', 'admin']);        
        return view('camper');
    }
}
