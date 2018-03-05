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
    	$this->middleware('auth');
        $this->camping = $camping;
        $this->modality = $modality;
        $this->helper = $helper;
    }

    public function show(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);
        $modalities = $this->modality->get('name', 'ASC');
    	$campings = $this->camping->get('name', 'ASC');
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
            'range' => 'required',
            'campers' => 'required',
            'teams' => 'required',
        ]);

        $camping->add($request, $this->helper);
        return redirect()->route('camping');
    }
}
