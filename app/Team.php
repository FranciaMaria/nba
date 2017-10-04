<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Player;
use Comment;

class Team extends Model
{
	protected $guarded = ['id'];

    static public function getPublishedTeams(){
    	return self::get();
    }

    public function players(){

        return $this->hasMany(\App\Player::class);
    }

    public function comments(){

    	return $this->hasMany(\App\Comment::class);
    }


    public function addComment(Comment $comment){
        $this->comments()->save(compact('comment'));
    }

}
