<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function superadmin()
    {
        return view('superadmin.dashboard');
    }

    public function erbadmin()
    {
        return view('erbadmin.dashboard');
    }

    public function iacucadmin()
    {
        return view('iacucadmin.dashboard');
    }

    public function reviewer()
    {
        return view('reviewer.dashboard');
    }

    public function student()
    {
        return view('student.dashboard');
    }
}
