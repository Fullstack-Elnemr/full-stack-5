<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(int $id){
        return view('users', compact('id'));
    }
}
