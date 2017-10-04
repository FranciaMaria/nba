<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Team;
use User;

class Comment extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['content', 'user_id', 'team_id'];

    //protected $fillable = ['content'];

    public function team(){

    	return $this->belongsTo(\App\Team::class, 'team_id');
    }

    public function user(){

    	return $this->belongsTo(\App\User::class, 'user_id');
    }
}
