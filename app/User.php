<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Comment;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments(){

        return $this->hasMany(\App\Comment::class);
    }

    /*public function addComment($comment){
        
        $this->comments()->create(compact('comment'));
    }*/
    public function publish($content){
        
        $this->comments()->create(compact('content'));
    }
    
     
}
