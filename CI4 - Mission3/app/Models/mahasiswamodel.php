<?php

namespace App\Models;
use CodeIgniter\Model;

class mahasiswamodel extends Model
{
    protected $table = 'mahasiswa';

    public function getmahasiswa()
    {
        // Kode ini sudah benar untuk mengambil data dari database
        return $this->findAll();
    }

    public function getMahasiswaByNim($nim)
    {
        // Cari data berdasarkan kolom 'nim' dan ambil baris pertama
        return $this->where(['nim' => $nim])->first();
    }
}
