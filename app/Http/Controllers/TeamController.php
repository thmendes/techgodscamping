<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camping;
use App\Models\Color;
use App\Models\Team;

class TeamController extends Controller
{
    public function __construct(Camping $camping, Color $color, Team $team)
    {
        $this->camping = $camping;
        $this->color = $color;
        $this->team = $team;
    }

    public function show(){
        return null;
    }
    
    public function create($campingId)
    {   
        $camping = $this->camping->where('id', '=', $campingId)->get();
        $colors = $this->color->orderBy('name', 'ASC')->get();
        
        return view('manage.team.create', compact('camping'), compact('colors'));
    }
    
    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);

        $this->validate(request(),[
            'name'  => 'required',
            'color' => 'required',
            'description' => 'required'
        ]);

        $this->team->create([
            'name' => $request['name'],
            'color' => $request['color'],
            'description' => $request['description']
        ]);
        
        return redirect()->route('manage');
    }
}
