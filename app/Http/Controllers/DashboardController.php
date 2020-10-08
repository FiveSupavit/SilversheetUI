<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function login(){
        return view('login');
    }

    public function postLogin(Request $request){
        $email = $request->email;
        $password = $request->password;

        if($email == 'admin@email.com'){
            return view('admin.dashboard');
        }elseif ($email == 'user@email.com'){
            return view('user.dashboard');
        }
    }
}
