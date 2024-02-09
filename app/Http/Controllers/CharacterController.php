<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{

    public function list()
   {
    // method to dosiplay all characters
    $characters = Character::get();

    return  view('home', ['characters' => ($characters)]);
    }
}
