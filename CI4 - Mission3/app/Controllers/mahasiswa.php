<?php

namespace App\Controllers;
use App\Models\mahasiswamodel;

class mahasiswa extends BaseController
{
    public function index()
    {
        // Inisialisasi model Anda
        $model = new mahasiswamodel();

        // Siapkan data untuk dikirim ke template
        $data = [
            'title'   => 'Daftar Mahasiswa',
            'content' => view('mahasiswaview', ['mahasiswa' => $model->getmahasiswa()])
        ];

        return view('template', $data);
    }

    public function detail($nim)
    {
        $model = new MahasiswaModel();
        $mahasiswaData = $model->getMahasiswaByNim($nim); // Panggil fungsi baru di model

        $data = [
            'title'   => 'Detail Mahasiswa',
            'content' => view('mahasiswa_detail_view', ['mahasiswa' => $mahasiswaData])
        ];
        return view('template', $data);
    }
}
