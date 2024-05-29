<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // camelCase
    // no_camel_case
    public function listAllUsers(){
        // lógica
        return view('users.listAllUsers');
    }

    public function listUser($uid, Request $request){
        print($uid);
    }

    public function createUser(){

    }
}
