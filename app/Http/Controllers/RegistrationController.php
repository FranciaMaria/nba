<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerification;

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

    	$validator = $request->validate([

    		'name' => 'required',
            'email' => 'required | string | email | max:255',
            'password' => 'required',
            'password_confirm' => 'required|same:password'
            
    	]);

        $user = User::create([

            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'is_verified' => false
        ]);

        if($user->is_verified === false){


                session()->flash('message', "Pogledati mail...");
                Mail::to($user->email)->send(new EmailVerification($user));
                
                
        }  

        return redirect('/login');   

    	

    	/*auth()->login($user);

    	return redirect('/');*/

    }

}
