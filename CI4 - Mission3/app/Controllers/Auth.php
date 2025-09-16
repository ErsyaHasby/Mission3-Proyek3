<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        // Selalu tampilkan form login, tidak auto redirect
        return view('auth/login', [
            'title' => 'Login'
        ]);
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
                'logged_in' => true,
            ]);

            // Redirect sesuai role
            if ($user['role'] === 'student') {
                return redirect()->to('/student/dashboard');
            } else {
                return redirect()->to('/admin/dashboard');
            }
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
