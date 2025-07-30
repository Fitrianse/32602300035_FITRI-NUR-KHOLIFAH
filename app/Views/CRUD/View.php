<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h1>Data Mahasiswa</h1>
<a href="<?= site_url('crud/tambah') ?>">Tambah Data</a>
<table>
    <tr>
        <th>NIM</th><th>Nama</th><th>Prodi</th><th>Universitas</th><th>No. HP</th><th>Aksi</th>
    </tr>
    <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= esc($mhs['nim']) ?></td>
            <td><?= esc($mhs['nama']) ?></td>
            <td><?= esc($mhs['prodi']) ?></td>
            <td><?= esc($mhs['universitas']) ?></td>
            <td><?= esc($mhs['nomor_handphone']) ?></td>
            <td>
                <a href="<?= site_url('crud/edit/' . $mhs['nim']) ?>">Edit</a> |
                <a href="<?= site_url('crud/delete/' . $mhs['nim']) ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<?= $this->endSection() ?>
