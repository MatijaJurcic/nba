<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;

class PlayersController extends Controller
{

    public function show($id){

        $player = Player::find($id);
        $team = Team::find($player->id);

        return view('teams.player', compact('team', 'player'));
    }
}
