<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modality;
use App\Models\Helper;
use App\Models\Camping;


class CampingController extends Controller
{   
    public function __construct(Camping $camping, Modality $modality, Helper $helper)
    {
    
        $this->camping = $camping;
        $this->modality = $modality;
        $this->helper = $helper;
    }

    public function show(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);
        $modalities = $this->modality->get('name', 'ASC');
    	$campings = $this->getCampings('created_at', 'DESC');
    	return view('campings/camping', array(
            'modalities' => $modalities, 
            'campings' => $campings)
        );
    }

    public function create(Request $request)
    {
    	$request->user()->authorizeRoles(['manager']);
    	$modalities = $this->modality->get('name', 'ASC');
    	return view('campings/create', array(
            'modalities' => $modalities)
        );
    }

    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);

        $this->validate(request(),[
            'name'  =>  'required',
            'description' =>'required',
            'modality_id' => 'required',
            'reservation' => 'required',
            'campers' => 'required',
            'teams' => 'required',
        ]);

        $dates = $this->helper->rangeToDate($request['reservation']);

        $this->camping->create([
            'name' => $request['name'],
            'description' => $request['description'],
            'modality_id' => $request['modality_id'],
            'teams' => $request['teams'],
            'campers' => $request['campers'],
            'begin_at' => $dates['0'],
            'end_at' => $dates['1']
        ]);
                
        return redirect()->route('camping');
    }

    public function getCampings($element, $sortBy)
    {
    	return $this->camping->orderBy($element, $sortBy)->get()->toArray();
    }

    public function manage($campingId)
    {
        $camping = $this->camping->where('id', '=', $campingId)->get();
        return view('campings.manage', compact('camping')
        );
    }
}