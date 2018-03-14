<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function __construct(Volunteer $volunteer)
    {
        $this->middleware('auth');
        $this->volunteer = $volunteer;
    }

    public function show(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);        

        $volunteers = $this->volunteer->get('created_at', 'DESC');

        return view('volunteer.volunteer', array(
        	'volunteers' => $volunteers
        ));
    }

    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);        
        return view('volunteer.create', array(
        	'campers' => array()
        ));
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'document'  =>  'numeric|unique:volunteers',
            'name' =>'required',
            'phone' =>'required',
            'born'  =>  'required',
            'street' => 'required',
            'city' => 'required',
            'province' => 'required',
            'shirt' => 'required'
           ]);
           
        $this->volunteer->add($request);

        return redirect()->route('volunteer');
    }

    public function GetByDocument($document)
    {
        return \Response::json($this->volunteer->where('document', '=', $document)->get());
    }
}