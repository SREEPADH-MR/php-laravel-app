<?php

namespace App\Http\Controllers\LaravelAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthenticateController extends Controller
{
    public function registerView()
    {
        return view('LaravelAdmin.adminRegister');
    }
}
