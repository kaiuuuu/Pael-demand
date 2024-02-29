<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{

    public function index(){
        $user = User::all();
        return view('welcome', ['users' => $user]);

    }
    
    public function login(Request $request)
    {
        return view('login');
    }
    public function loginr(Request $request)
    {
        if($request->inputField > 0)
        {
            return 'Maior que zero';
        }
        elseif($request->inputField < 0)
        {
            return 'menor que zero';
        }
    }

    public function create() {
         return view('events.create');
    }

}

