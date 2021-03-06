<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NeedInputController extends Controller
{
    public function index(){
        return view('admin.need_input.list');
    }

    public function certificate(){
        return view('admin.need_input.certificate');
    }

    public function certificateNurse(){
        return view('admin.need_input.certificate_nurse');
    }

    public function certificateOtherStaff(){
        return view('admin.need_input.certificate_other_staff');
    }
}
