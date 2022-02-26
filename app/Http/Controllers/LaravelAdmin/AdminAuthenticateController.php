<?php

namespace App\Http\Controllers\LaravelAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthenticateController extends Controller
{
    public function registerTemplate()
    {
        return view('LaravelAdmin.adminRegister');
    }

    public function loginTemplate()
    {
        return view('LaravelAdmin.adminLogin');
    }
}
