<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modality;

class CampingController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function show(Request $request, Modality $modality)
    {
    	$request->user()->authorizeRoles(['manager']);
    	$modalities = $modality->get('name', 'ASC');
    	return view('campings/camping', array('modalities' => $modalities));
    }

    public function create(Request $request, Modality $modality)
    {
    	$request->user()->authorizeRoles(['manager']);
    	$modalities = $modality->get('name', 'ASC');
    	return view('campings/create', array('modalities' => $modalities));
    }
}
