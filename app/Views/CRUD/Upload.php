<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="/assets/css/crud.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Tambah Data Mahasiswa</h2>
    <form action="/crud/tambah" method="post">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="prodi">Prodi:</label>
        <input type="text" name="prodi" required>

        <label for="universitas">Universitas:</label>
        <input type="text" name="universitas" required>

        <label for="nomor_handphone">No HP:</label>
        <input type="text" name="nomor_handphone" required>

        <button type="submit">Simpan</button>
    </form>
</div>
</body>
</html>
