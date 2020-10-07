<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        return view('admin.member.all');
    }

    public function create(){
        return view('admin.member.create');
    }
}
