<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{

    public function list()
    {
        // method to display all characters
        $characters = Character::get();
        $characters->load("houses");
        return  view('home', ['characters' => ($characters), 'houseName' => '']);
    }

    public function read($id)
    {
        // method to display one character from his id
        $character = Character::find($id);
        if (!$character) {
            return response()->json([
                "error" => "character not found"
            ], 404);
        }
        return view('character',['character' => ($character)]);
    }
}
