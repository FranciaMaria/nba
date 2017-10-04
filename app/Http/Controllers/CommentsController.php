<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;
use App\User;

class CommentsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Team $team){

    	$this->validate(request(), [

    		'content' => 'required | min: 10',
    		'user_id' => 'required',
    		'team_id' => 'required',
    	]);

        $comment = Comment::create([

            'content' => request('content'),
            'user_id' => auth()->id(),
            'team_is' => $team->id,

        ]);


        $team->addComment($comment);
        
    	return back();
    }
}
