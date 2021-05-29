<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function appointmentTable()
    {
        return view('user.appointmentTable');
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function lawyerTable()
    {
        return view('user.lawyerTable');
    }
}
