<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        return view('home');
    }

    public function show() 
    {
        return ['ism' => 'Zilol',];
    }

    public function userid($id = null, $ism = null) 
    {
        return view('users', [
            'id' => $id,
            'ism' => $ism
        ]);
    }
}
