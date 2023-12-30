<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('landing.index',compact('users'));
    }

    public function create()
    {
        User::create([
            "name"=>"José Vegas",
            "email"=>"josevegas@gmail.com",
            "password"=>Hash::make('123456')
        ]);
        return redirect()->route('user.index');
    }
}
