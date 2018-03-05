<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modality;

class ModalityController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function show(Request $request, Modality $modality)
    {
    	$request->user()->authorizeRoles(['manager']);
      $modalities = array();

    	$modalities = $modality->get('name', 'ASC');
    	
      return view('campings.modality.modality', array(
    		'modalities' => $modalities,
    		'campings' => array()));
    }

    public function create(Request $request)
   	{
   		$request->user()->authorizeRoles(['manager']);
    	return view('campings.modality.create');	
   	}

   	public function store(Request $request, Modality $modality)
   	{
   	 	$this->validate(request(),[
            'name'  =>  'required',
            'description' =>'required'
       	]);

   	 	$modality->add($request);
   	 	
   	 	return redirect()->route('modality');
  	
   	}
}
