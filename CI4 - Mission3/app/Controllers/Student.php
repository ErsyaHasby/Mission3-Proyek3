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

        $userId = session()->get('user_id'); // Gunakan user_id

        // Semua courses
        $allCourses = $courseModel->findAll();

        // Course yang sudah diambil mahasiswa ini
        $takenCourses = $db->table('enrollments e')
            ->select('c.id, c.title, c.description')
            ->join('courses c', 'c.id = e.course_id')
            ->where('e.user_id', $userId) // Ubah ke user_id
            ->get()->getResultArray();

        return view('student/courses', [
            'title' => 'Daftar Courses',
            'allCourses' => $allCourses,
            'takenCourses' => $takenCourses
        ]);
    }

    public function enroll($courseId)
    {
        $userId = session()->get('user_id'); // Ubah ke user_id
        $enrollmentModel = new EnrollmentModel();

        // Cek apakah sudah pernah enroll course ini
        $exists = $enrollmentModel
            ->where('user_id', $userId) // Ubah ke user_id
            ->where('course_id', $courseId)
            ->first();

        if ($exists) {
            return redirect()->to('/student/courses')->with('error', 'Anda sudah enroll course ini.');
        }

        // Simpan enroll baru
        $enrollmentModel->save([
            'user_id' => $userId, // Ubah ke user_id
            'course_id' => $courseId,
            'enrolled_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/student/courses')->with('success', 'Berhasil enroll ke course!');
    }
}