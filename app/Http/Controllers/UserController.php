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

    public function listUserById(){

    }

    public function createUser(){

    }
}
