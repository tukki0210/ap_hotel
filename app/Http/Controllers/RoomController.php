<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $items = Room::all();

        return view('room.index',['items' => $items]);
    }
}
