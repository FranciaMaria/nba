<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    
	public function __construct()
    {
        $this->middleware('guest');
    }

    public function create(){

    	return view('auth.create');
    }

    protected function store(Request $request){

    	$request->validate([

    		'name' => 'required',
            'email' => 'required | string | email | max:255',
            'password' => 'required',
            'password_confirm' => 'required|same:password'
            
    	]);

    	$user = User::create([

    		'name' => $request->get('name'),
    		'email' => $request->get('email'),
    		'password' => bcrypt($request->get('password'))
    	]);

    	auth()->login($user);

    	return redirect('/');

    }
}
