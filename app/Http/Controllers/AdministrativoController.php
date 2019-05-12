<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class AdministrativoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        return view('admin.index');
    }

    public function createUser()
    {
        return view('admin.createUser');
    }

    public function StoreUser(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
			'name' => $request['name'],
			'email' => $request['email'],
			'password' => bcrypt($request['password']),
		]);

		$user->roles()->attach(Role::where('name', 'manager')->first());

		return view('admin.index');
    }
}
