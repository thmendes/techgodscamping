<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    
    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function show(Request $request)
    {
        $people = $this->person->orderBy('created_at', 'DESC')->limit(10)->get();
        return view('people.people', compact('people'));
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
            'street' => 'required',
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
            'parent' => $request['parent'],
            'parent_phone' => $request['parent_phone'],
            'medicine' => $request['medicine'],
            'shirt' => $request['shirt'],
        ]);   

        return view('people.success')->with('person', $request['name']);
    }

    public function search(Request $request)
    {
        if(strlen($request->keywords) > 0)
            return \Response::json($this->person->search($request->keywords)->get());

        return \Response::json();
    }

    public function GetPeople()
    {
        return \Response::json($this->person->limit(10)->OrderBy('name')->get());
    }

    public function SetPeople()
    {
        
    }

    public function Success()
    {
    }
}
