<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.member.all');
    }

    public function certificate(){
        return view('certificate');
    }
}
