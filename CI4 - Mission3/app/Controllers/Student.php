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


    public function detail($id)
    {
        $mahasiswaModel = new \App\Models\MahasiswaModel();
        $courseModel = new \App\Models\CourseModel();
        $db = \Config\Database::connect();

        // ambil data mahasiswa
        $student = $mahasiswaModel->find($id);

        if (!$student) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Mahasiswa dengan ID $id tidak ditemukan");
        }

        // ambil courses yg sudah di-enroll (join enrollments + courses)
        $builder = $db->table('enrollments e')
            ->select('c.id, c.name, c.description')
            ->join('courses c', 'c.id = e.course_id')
            ->where('e.student_id', $id);
        $courses = $builder->get()->getResult();

        return view('admin/students/detail', [
            'student' => $student,
            'courses' => $courses
        ]);
    }

}