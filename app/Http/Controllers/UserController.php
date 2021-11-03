<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $items = User::all();

        return view('user.index',['items' => $items]);
    }
    public function add()
    {
        return view('user.add');
    }
    public function create(Request $request)
    {
        $user = new User();
        $user->fill($request->all())->save();
        return redirect('user');
    }
}
