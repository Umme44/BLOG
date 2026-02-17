<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function getUser(){
        return "TANNY";
    }

    function aboutUser($name){
        return view('about', ['name'=>$name]);
    }

    function login(){
        return view('admin/login');
    }
}
