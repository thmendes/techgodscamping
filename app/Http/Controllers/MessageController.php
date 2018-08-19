<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class MessageController extends Controller
{
    public function mail(Request $request)
    {
        $this->validate(request(),[
            'name'  =>  'required',
            'email'  =>  'required',
            'contentMessage'  =>  'required'
        ]);

        Mail::to('contato@apadroeiradouradina.com.br')->send(new SendMailable($request['name'], $request['email'], $request['contentMessage']));
        
        return redirect()->route('institutional');
    }
}
