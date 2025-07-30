<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa'; // ← Sesuai dengan nama tabel
    protected $primaryKey = 'nim';  // ← Sesuai primary key
    protected $allowedFields = ['nim', 'nama', 'prodi', 'universitas', 'nomor_handphone'];
}
