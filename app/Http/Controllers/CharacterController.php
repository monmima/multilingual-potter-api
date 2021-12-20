<?php

namespace App\Http\Controllers;
use App\Models\Character;

use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {

        $characters = Character::all();

        return [
            "characters" => $characters,
        ];

    }

    // show the edit form
    public function edit($id)
    {
        $character = Character::findOrFail($id);

        return [
            "character" => $character,
        ];
    }
}
