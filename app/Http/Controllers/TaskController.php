<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $users= User::has('posts')->get();
        // return $users;
        return view('home',compact('users'));

    }
}
