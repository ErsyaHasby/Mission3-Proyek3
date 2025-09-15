<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function dashboard()
    {
        return view('student/dashboard');
    }
}
