<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
//    public function index(){
//        return view('admin.setting.list');
//    }

    public function notification(){
        return view('admin.setting.notification');
    }

    public function certificate(){
        return view('admin.setting.certificate');
    }

    public function company(){
        return view('admin.setting.company');
    }
}
