<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Mahasiswa extends Controller
{
    public function form()
    {
        return view('form_mahasiswa');
    }

    public function submit()
    {
        $nama         = $this->request->getPost('nama');
        $nim          = $this->request->getPost('nim');
        $kelas        = $this->request->getPost('kelas');
        $matakuliah   = $this->request->getPost('matakuliah');
        $dosen        = $this->request->getPost('dosen');
        $asisten      = $this->request->getPost('asisten');

        return "
        <h2>Data Mahasiswa</h2>
        <ul>
            <li>Nama: $nama</p>
            <li>NIM: $nim</p>
            <li>Kelas: $kelas</p>
            <li>Mata Kuliah: $matakuliah</p>
            <li>Dosen Pengampu: $dosen</p>
            <li>Asisten Praktikum: $asisten</p>
        </ul>";
    }
}
