<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;

class TeamsController extends Controller
{
    public function index(){

    	$teams = Team::getPublishedTeams();

    	return view('teams.index', compact('teams'));
    }

    public function show($id){

    	$team = Team::find($id);

    	$team = Team::with('players')->find($id);
    	return view('teams.show', compact('team'));
    }
}
