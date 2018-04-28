<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camping;
use App\Models\Color;
use App\Models\Team;
use App\Models\Angel;

class TeamController extends Controller
{
    public function __construct(Camping $camping, Color $color, Team $team, Angel $angel)
    {
        $this->camping = $camping;
        $this->color = $color;
        $this->team = $team;
    }

    public function show()
    {
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
        $angels = "";
        $request->user()->authorizeRoles(['manager']);

        $this->validate(request(),[
            'name'  => 'required',
            'color' => 'required',
            'description' => 'required'
        ]);
        
        $this->team = $this->team->create([
            'name' => $request['name'],
            'color_id' => $request['color'],
            'description' => $request['description'],
            'camping_id' => $request['camping']
        ]);

        $angels = $this->getAngels($request);
        
        foreach ($angels as $key => $value) {
            $this->angel = $this->team->angel()->create([
                'volunteer_id' => $value
            ]);
        }
            
        return redirect()->route('manage', ['campingId' => $request['camping']]);
    }

    private function getAngels(Request $request)
    {
        $angels = array();
        $angel = "";
        $index = 1;

        while (true) {
            $angel = $request['angel'.$index];
            if(is_null($angel))
                return $angels;
            
            array_push($angels, $request['angelValue'.$index]);
            $index++;
        }
    }

    public function associate($campingId)
    {
        $camping = $this->camping->where('id', '=', $campingId)->get();
        return view('manage.team.associate', compact('camping'));
    }
}