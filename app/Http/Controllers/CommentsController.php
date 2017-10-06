<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Team;
use App\User;
use App\Comment;

class CommentsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('words', ['only' => 'store']);
    }

    public function store(Team $team){

        $this->validate(request(), [
            'content' => 'required|min:2'
        ]);

        $comment = new Comment();
        $comment = $team->comments()->create([
            'content' => request('content'),
            'user_id' => auth()->user()->id,
            'team_id' => $team->id,
        ]);

        $comment->save();
        
    	return back();
    }
}
