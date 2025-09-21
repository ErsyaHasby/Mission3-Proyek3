<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CourseModel;
use App\Models\EnrollmentModel;
use Config\Database;

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
        $courseModel = new CourseModel();
        $enrollmentModel = new EnrollmentModel();
        $db = Database::connect();

        $studentId = session()->get('user_id'); // ambil id mahasiswa yg login

        // semua courses
        $allCourses = $courseModel->findAll();

        // course yang sudah diambil mahasiswa ini
        $takenCourses = $db->table('enrollments e')
            ->select('c.id, c.title, c.description')
            ->join('courses c', 'c.id = e.course_id')
            ->where('e.student_id', $studentId)
            ->get()->getResultArray();

        return view('student/courses', [
            'title' => 'Daftar Courses',
            'allCourses' => $allCourses,
            'takenCourses' => $takenCourses
        ]);
    }

    public function enroll($courseId)
    {
        $studentId = session()->get('user_id');
        $enrollmentModel = new EnrollmentModel();

        // cek apakah sudah pernah enroll course ini
        $exists = $enrollmentModel
            ->where('student_id', $studentId)
            ->where('course_id', $courseId)
            ->first();

        if ($exists) {
            return redirect()->to('/student/courses')->with('error', 'Anda sudah enroll course ini.');
        }

        // simpan enroll baru
        $enrollmentModel->save([
            'student_id' => $studentId,
            'course_id' => $courseId,
        ]);

        return redirect()->to('/student/courses')->with('success', 'Berhasil enroll ke course!');
    }
}
