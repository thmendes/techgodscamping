<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    
    public function __construct(Person $person)
    {
        $this->middleware('auth');
        $this->person = $person;
    }

    public function show(Request $request)
    {
        if($request->has('name') && $request->has('document'))
        {
            $people = $this->person
                ->where('name', 'like', '%' . $request['name'] . '%')
                ->where('document', 'like', '%' . $request['document'] . '%')
                ->orderBy('created_at', 'DESC')->limit(10)->get();

            return view('people.people', compact('people'));
        }
        elseif($request->has('name') || $request->has('document'))
        {
            if($request->has('name'))
            {
                $people = $this->person
                ->where('name', 'like', '%' . $request['name'] . '%')
                ->orderBy('created_at', 'DESC')->limit(10)->get();

                return view('people.people', compact('people'));
            }

            $people = $this->person
                ->where('document', 'like', '%' . $request['document'] . '%')
                ->orderBy('created_at', 'DESC')->limit(10)->get();

            return view('people.people', compact('people'));
        }
        else
        {
            $people = $this->person->orderBy('created_at', 'DESC')->limit(10)->get();
    
            return view('people.people', compact('people'));
        }
    }

    public function showAll(Request $request)
    {
        $people = $this->person->latest()->simplePaginate(50);
        return view('people.all', compact('people'));
    }

    public function create(Request $request)
    {
        //$request->user()->authorizeRoles(['manager']);        
        return view('people.create');
    }

    public function store(Request $request)
    {
    	$this->validate(request(),[
            'rg'  =>  'required|numeric|unique:people',
            'cpf'  =>  'required|numeric|unique:people',
            'name' =>'required',
            'phone' =>'required',
            'born'  =>  'required',
            'parent' => 'required',
            'parent_phone' => 'required',
            'sus' => 'required',
            'street' => 'required',
            'neighbor' => 'required',
            'city' => 'required',
            'province' => 'required',
            'shirt' => 'required'
           ]);

        $this->person->create([
            'rg'  =>  $request['rg'],
            'cpf'  =>  $request['cpf'],
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'born' => $request['born'],
            'street' => $request['street'],
            'city' => $request['city'],
            'province' => $request['province'],
            'neighbor' => $request['neighbor'],
            'sus' => $request['sus'],
            'parent' => $request['parent'],
            'parent_phone' => $request['parent_phone'],
            'medicine' => $request['medicine'],
            'medicalCare' => $request['medicalCare'],
            'shirt' => $request['shirt'],
            'obs' => $request['obs']
        ]);   

        $people = $this->person->orderBy('created_at', 'DESC')->limit(10)->get();
    
        return view('people.people', compact('people'));
    }

    ## API ##

    public function search(Request $request)
    {
        if(strlen($request->keywords) > 0)
            return \Response::json($this->person->search($request->keywords)->get());

        return \Response::json();
    }

    public function GetPerson($id)
    {
        return \Response::json($this->person->where('id', $id)->get());
    }

    public function GetPeople()
    {
        return \Response::json($this->person->limit(10)->OrderBy('name')->get());
    }

    public function updatePeople(Request $request)
    {      
        try
        {
            $this->person
                ->where('id', $request['id'])
                ->update([
                    'rg'  =>  $request['rg'],
                    'cpf'  =>  $request['cpf'],
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'phone' => $request['phone'],
                    'born' => $request['born'],
                    'street' => $request['street'],
                    'city' => $request['city'],
                    'province' => $request['province'],
                    'neighbor' => $request['neighbor'],
                    'sus' => $request['sus'],
                    'parent' => $request['parent'],
                    'parent_phone' => $request['parent_phone'],
                    'medicine' => $request['medicine'],
                    'medicalCare' => $request['medicalCare'],
                    'shirt' => $request['shirt'],
                    'obs' => $request['obs']
                ]);
        }
        catch(Exception $e)
        {
            return response()->json([
                'error' => $e.getMessage(),
            ]);
        }

        return response()->json([
            'error' => '',
        ]);
    }

    public function RemovePerson($personId)
    {
        try
        {
            $person = $this->person->findOrFail($personId)->delete();
        }
        catch(Exception $e)
        {
            return response()->json([
                'error' => $e.getMessage(),
            ]);
        }

        return response()->json([
            'error' => '',
        ]);
    }
}
