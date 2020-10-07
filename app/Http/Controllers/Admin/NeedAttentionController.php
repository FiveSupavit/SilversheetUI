<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NeedAttentionController extends Controller
{
    public function index(){
        return view('admin.need_attention.list');
    }
}
