<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
</head>
<body>
    <h2>Form Input Data Mahasiswa</h2>
    <form action="/submit" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim"><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas"><br><br>

        <label>Mata Kuliah:</label><br>
        <input type="text" name="matakuliah"><br><br>

        <label>Dosen Pengampu:</label><br>
        <input type="text" name="dosen"><br><br>

        <label>Asisten Praktikum:</label><br>
        <input type="text" name="asisten"><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
