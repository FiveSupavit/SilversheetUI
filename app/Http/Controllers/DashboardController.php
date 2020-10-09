<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function certificate(){
        return view('certificate');
    }

    public function login(){
        return view('login');
    }
}
