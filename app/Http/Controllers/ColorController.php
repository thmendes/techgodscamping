<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    public function __construct(Color $color)
    {
        $this->middleware('auth');
        $this->color = $color;
    }

    public function show(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);        

        $colors = $this->color->orderBy('name', 'ASC')->get()->toArray();

        return view('color.color', compact('colors'));
    }

    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);

        $this->validate(request(),[
            'name'  =>  'required',
        ]);

        $this->color->create([
            'name' => $request['name']
        ]);
        
        return redirect()->route('color');
    }

}
