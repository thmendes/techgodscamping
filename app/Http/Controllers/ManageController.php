<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camping;
use App\Models\Angel;
use App\Models\Team;
use App\Models\Color;


class ManageController extends Controller
{
    public function __construct(Camping $camping, Color $color, Angel $angel, Team $team)
    {
        $this->camping = $camping;
        $this->color = $color;
        $this->angel = $angel;
        $this->team = $team;
    }

    public function show($campingId)
    {
        $camping = $this->camping->where('id', '=', $campingId)->get();
        $team = $this->team->where('camping_id', '=', $camping[0]->id)->get();
        return view('campings.manage', compact('camping'), compact('team'));
    }

}
