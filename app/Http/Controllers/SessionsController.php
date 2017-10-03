<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'destroy', 'login']);
    }

	public function create()
	{
		return view('login.create');
	}

	public function store()
	{
		if (!auth()->attempt(
				request(['email', 'password'])
			)) {

			return back()->withErrors([
				'message' => 'Bad credentials. Please try again'
			]);
		}

		return redirect('/');
	}

    public function destroy()
    {
    	auth()->logout();

    	return redirect('/');
    }
}
