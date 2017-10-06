<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['destroy']]);
    }


    public function verify($id){

        $user = User::find($id);

        $user->is_verified = true;
        $user->save();

        auth()->login();

        return redirect('/');

    }

	public function create()
	{
		return view('login.create');		
		
	}

	public function store()
	{
		if(User::where('email', request('email'))->first()->is_verified){
			if (!auth()->attempt(
				request(['email', 'password'])
			)) {
			return back()->withErrors([
				'message' => 'Bad credentials. Please try again'
			]);
		}
	}
		return redirect('/');
	}

    public function destroy()
    {
    	auth()->logout();

    	return redirect('/login');
    }
}
