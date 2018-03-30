<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camping;
use App\Models\Color;


class ManageController extends Controller
{
    public function __construct(Camping $camping, Color $color)
    {
        $this->camping = $camping;
        $this->color = $color;
    }

    public function show($campingId)
    {
        $camping = $this->camping->where('id', '=', $campingId)->get();
        return view('campings.manage', compact('camping'), compact('colors'));
    }

}
