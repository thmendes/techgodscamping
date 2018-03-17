<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function __construct(Job $job)
    {
        $this->middleware('auth');
        $this->job = $job;
    }

    public function show(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);        
        
        $jobs = $this->job->orderBy('created_at', 'DESC')->get()->toArray();

        return view('job.job', array(
        	'jobs' => $jobs
        ));
    }

    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);        
        
        return view('job.create');
    }

    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);

        $this->validate(request(),[
            'name'  =>  'required',
            'description' =>'required'
        ]);

        $this->job->create([
            'name' => $request['name'],
            'description' => $request['description']
        ]);
        
        return redirect()->route('job');
    }
}
