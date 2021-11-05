<?php

namespace App\Http\Controllers;

use App\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    public function index()
    {
        $items = RoomType::all();

        return view('roomType.index',['items' => $items]);
    }
}
