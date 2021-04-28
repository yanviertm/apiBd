<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index(){
        $player = Player::all();
        return $player;
    }

    public function create(Request $request){
        $player = new Player();
        $player->name = $request->name;
        $player->lastname = $request->lastname;
        $player->email = $request->email;
        $player->phone = $request->phone;
        $player->nickname = $request->nickname;
        $player->game = $request->game;
        $player->save();
    }

    public function update(Request $request){
        $player = Player::findOrFail($request->id);
        $player->name = $request->name;
        $player->lastname = $request->lastname;
        $player->email = $request->email;
        $player->phone = $request->phone;
        $player->nickname = $request->nickname;
        $player->game = $request->game;
        $player->save();
    }
    public function delete(Request $request){
        $player = Player::findOrFail($request->id);
        $player->delete();
    }

    public function search(Request $request,int $id){
        $player = Player::first($id);
        return ['data'=>$player];
    }
}
