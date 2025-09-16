<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Student extends BaseController
{
    public function dashboard()
    {
        return view('student/dashboard', [
            'title' => 'Dashboard Mahasiswa'
        ]);
    }

    public function courses()
    {
        // nanti ambil data dari tabel courses
        return view('student/courses', [
            'title' => 'Daftar Courses'
        ]);
    }

    public function enroll($courseId)
    {
        // nanti implementasi insert ke tabel enrollments
        return redirect()->to('/student/courses')->with('success', 'Berhasil enroll ke course!');
    }
}
