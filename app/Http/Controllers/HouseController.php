<?php

namespace App\Http\Controllers;

use App\Models\House;

class HouseController extends Controller
{

    public function list()
    {
     // method to display all houses
     $houses = House::get();

     return  view('houses', ['houses' =>($houses)]);
    }

    public function read($id)
    {
             // method to display one house from its id

        $house = House::find($id);
        if (!$house) {
            return response()->json([
                "error" => "house not found"
            ], 404);
        }
        return view('home',['houses' => $house, 'houseId' =>$id,]);
    }
}
