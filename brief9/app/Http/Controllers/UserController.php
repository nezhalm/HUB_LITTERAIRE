<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
         $users = user::all();
         return view('test',[
         'users' =>$users
     ]);
    }
}
