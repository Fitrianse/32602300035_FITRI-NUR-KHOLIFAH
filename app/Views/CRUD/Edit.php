<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h2>Edit Data Mahasiswa</h2>
<form method="post" action="<?= site_url('crud/update') ?>">
    <input type="hidden" name="nim" value="<?= esc($mahasiswa['nim']) ?>">
    <label>Nama:</label><input type="text" name="nama" value="<?= esc($mahasiswa['nama']) ?>"><br>
    <label>Prodi:</label><input type="text" name="prodi" value="<?= esc($mahasiswa['prodi']) ?>"><br>
    <label>Universitas:</label><input type="text" name="universitas" value="<?= esc($mahasiswa['universitas']) ?>"><br>
    <label>No HP:</label><input type="text" name="nomor_handphone" value="<?= esc($mahasiswa['nomor_handphone']) ?>"><br>
    <button type="submit">Update</button>
</form>

<?= $this->endSection() ?>
