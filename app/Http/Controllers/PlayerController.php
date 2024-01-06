<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return response()->json($players);
    }
    //End Method

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'age' => 'required|integer',
            'nationality' => 'required|string',
            'foot' => 'required|string',
            'status' => 'required|string',
        ]);

        $player = Player::create($validatedData);
        return response()->json($player, 201);
    }
    //End Method

    public function show(Player $player)
    {
        return response()->json($player);
    } //End Method

    public function update(Request $request, Player $player)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'age' => 'required|integer',
            'nationality' => 'required|string',
            'foot' => 'required|string',
            'status' => 'required|string',
        ]);

        $player->update($validatedData);
        return response()->json($player, 200);
    }//End Method

    public function destroy(Player $player){
        $player->delete();
        return response()->json(null, 204); //204 No Content
    
    }
}
