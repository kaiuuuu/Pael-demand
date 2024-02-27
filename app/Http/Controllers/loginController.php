<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{

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
}
