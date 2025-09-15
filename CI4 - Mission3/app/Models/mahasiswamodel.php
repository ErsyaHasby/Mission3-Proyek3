<?php

namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';

    public function getMahasiswa()
    {
        return $this->findAll();
    }

    public function getMahasiswaByNim($nim)
    {
        return $this->where(['nim' => $nim])->first();
    }
}
