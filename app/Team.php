<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Player;

class Team extends Model
{
    static public function getPublishedTeams(){
    	return self::get();
    }

    public function players(){

        return $this->hasMany(Player::class);
    }
}
