<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard', [
            'title' => 'Dashboard Admin'
        ]);
    }

    public function courses()
    {
        // nanti ambil data dari tabel courses
        return view('admin/courses', [
            'title' => 'Kelola Courses'
        ]);
    }

    public function students()
    {
        // nanti ambil data dari tabel mahasiswa
        return view('admin/students', [
            'title' => 'Kelola Mahasiswa'
        ]);
    }
}
