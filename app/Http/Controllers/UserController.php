<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $name = "Irfan";
        return view('user/index', compact('name'));
    }

    function create(){
     

        return view('user/create');
    }
    function edit(){
 
        return view('user/edit');
    }
}
