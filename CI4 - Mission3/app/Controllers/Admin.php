<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CourseModel;
use App\Models\MahasiswaModel;

class Admin extends BaseController
{
    // ===================== DASHBOARD =====================
    public function dashboard()
    {
        return view('admin/dashboard', [
            'title' => 'Dashboard Admin'
        ]);
    }

    // ===================== COURSES =====================
    public function courses()
    {
        $model = new CourseModel();
        $data['courses'] = $model->findAll();
        return view('admin/courses/index', $data);
    }

    public function createCourse()
    {
        return view('admin/courses/create');
    }

    public function storeCourse()
    {
        $model = new CourseModel();
        $model->save([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ]);
        return redirect()->to('/admin/courses')->with('success', 'Course berhasil ditambahkan');
    }

    public function editCourse($id)
    {
        $model = new CourseModel();
        $data['course'] = $model->find($id);
        return view('admin/courses/edit', $data);
    }

    public function updateCourse($id)
    {
        $model = new CourseModel();
        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ]);
        return redirect()->to('/admin/courses')->with('success', 'Course berhasil diperbarui');
    }

    public function deleteCourse($id)
    {
        $model = new CourseModel();
        $model->delete($id);
        return redirect()->to('/admin/courses')->with('success', 'Course berhasil dihapus');
    }

    // ===================== STUDENTS (MAHASISWA) =====================
    public function students()
    {
        $model = new MahasiswaModel();
        $data['students'] = $model->findAll();
        return view('admin/students/index', $data);
    }

    public function createStudent()
    {
        return view('admin/students/create');
    }

    public function storeStudent()
    {
        $model = new MahasiswaModel();
        $model->save([
            'NIM' => $this->request->getPost('NIM'),
            'nama' => $this->request->getPost('nama'),
            'umur' => $this->request->getPost('umur'),
        ]);
        return redirect()->to('/admin/students')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    public function editStudent($id)
    {
        $model = new MahasiswaModel();
        $data['student'] = $model->find($id);
        return view('admin/students/edit', $data);
    }

    public function updateStudent($id)
    {
        $model = new MahasiswaModel();
        $model->update($id, [
            'NIM' => $this->request->getPost('NIM'),
            'nama' => $this->request->getPost('nama'),
            'umur' => $this->request->getPost('umur'),
        ]);
        return redirect()->to('/admin/students')->with('success', 'Mahasiswa berhasil diperbarui');
    }

    public function deleteStudent($id)
    {
        $model = new MahasiswaModel();
        $model->delete($id);
        return redirect()->to('/admin/students')->with('success', 'Mahasiswa berhasil dihapus');
    }
}
