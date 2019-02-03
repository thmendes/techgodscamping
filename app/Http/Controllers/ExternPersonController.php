<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class ExternPersonController extends Controller
{
    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function create(Request $request)
    {
        return view('people.extern-create');
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

        $this->person->count();

        $retorno = array(
            'person' => $request['name'],
            'number' => $this->person->count()
        );

        return view('people.success')->with('retorno', $retorno);
    }
}
