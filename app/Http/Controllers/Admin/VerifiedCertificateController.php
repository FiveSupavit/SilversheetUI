<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifiedCertificateController extends Controller
{
    public function index(){
        return view('admin.verified_certificate.list');
    }

    public function certificate(){
        return view('admin.verified_certificate.certificate');
    }
}
