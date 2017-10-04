<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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

       /* $user = auth()->id();

        $team->addComment(request('content'))->with('user')->get();

        $user->publish(request('content'))->with('team')->get();*/

        //$team = Video::find(Input::get('team_id')) ;

        $comment = new Comment;
        $comment->content = request('content');
        $comment->user()->associate(Auth::user());
        $comment->team()->associate($team->id);
        //$comment->save();

        $team->addComment(compact('comment'));
        
    	return back();
    }
}
