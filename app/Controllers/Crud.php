<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function tambah()
    {
        if ($this->request->getMethod() === 'post') {
            $nim = $this->request->getPost('nim');

            // Cek apakah NIM sudah ada
            $cek = $this->mahasiswaModel->where('nim', $nim)->first();
            if ($cek) {
                return view('CRUD/upload', [
                    'error' => 'NIM sudah terdaftar!',
                    'inputNim' => $nim
                ]);
            }

            // Simpan data
            $data = [
                'nim' => $nim,
                'nama' => $this->request->getPost('nama'),
                'prodi' => $this->request->getPost('prodi'),
                'universitas' => $this->request->getPost('universitas'),
                'nomor_handphone' => $this->request->getPost('nomor_handphone'),
            ];

            $this->mahasiswaModel->insert($data);

            return redirect()->to('/crud');
        }

        return view('CRUD/upload');
    }
}
