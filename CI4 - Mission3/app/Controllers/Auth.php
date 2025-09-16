<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        $session = session();

        // ✅ Kalau sudah login, langsung redirect sesuai role
        if ($session->get('logged_in')) {
            return $session->get('role') === 'student'
                ? redirect()->to('/student/dashboard')
                : redirect()->to('/admin/dashboard');
        }

        // ✅ Cegah cache di halaman login
        $this->response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
        $this->response->setHeader('Pragma', 'no-cache');

        return view('auth/login', ['title' => 'Login']);
    }

    public function login()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role'],
                'logged_in' => true,   // samakan dengan AuthFilter
            ]);

            // Redirect sesuai role
            return $user['role'] === 'student'
                ? redirect()->to('/student/dashboard')
                : redirect()->to('/admin/dashboard');
        } else {
            $session->setFlashdata('error', 'Username atau password salah!');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
