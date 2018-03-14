<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camper;

class CamperController extends Controller
{
    public function __construct(Camper $camper)
    {
        $this->middleware('auth');
        $this->camper = $camper;
    }

    public function show(Request $request)
    {
        $request->user()->authorizeRoles(['camper', 'manager']);        

        $campers = $this->camper->get('created_at', 'DESC');;

        return view('camper.camper', array(
        	'campers' => $campers
        ));
    }
	
	public function create(Request $request)
    {
        $request->user()->authorizeRoles(['camper', 'manager']);        
        return view('camper.create', array(
        	'campers' => array()
        ));
    }

    public function store(Request $request)
    {
    	$this->validate(request(),[
            'document'  =>  'numeric|unique:campers',
            'name' =>'required',
            'phone' =>'required',
            'born'  =>  'required',
            'street' => 'required',
            'city' => 'required',
            'province' => 'required',
            'shirt' => 'required'
       	]);

       	$this->camper->add($request);

       	return redirect()->route('camper');
    }

    public function GetByDocument($document)
    {
        return \Response::json($this->camper->where('document', '=', $document)->get());
    }
}

