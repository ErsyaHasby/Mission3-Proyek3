<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['NIM', 'nama', 'umur'];

    // otomatis handle created_at & updated_at
    protected $useTimestamps = true;
}
