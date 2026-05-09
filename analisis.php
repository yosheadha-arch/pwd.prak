<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
    }

    .navbar {
        background: #1da1f2;
        color: white;
        padding: 15px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar ul {
        display: flex;
        gap: 20px;
        list-style: center;
    }

    .navbar a {
        color: white;
        gap: 20px;
        list-style: none;
    }

    body {
        background: url('') center/cover no-repeat;
        min-height: 100vh;
    }

    .form-box {
        width: 600px;
        margin: 50px auto;
        background: rgba(255,255,255,0.9);
        padding: 30px;
        border-radius: 15px;
    }

    label {
        font-weight: bold;
    }

    input, select {
        width: 100%;
        padding: 10px;
        margin: 8px 0 15px;
        border-radius: 20px;
        border: 2px solid black;
        outline: none;
    }

    input:focus, select:focus {
        border-color: #1da1f2;
    }

    button {
        padding: 12px;
        width: 100%;
        border: none;
        background: #1da1f2;
        color: white;
        border-radius: 10px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover{
        background: #0d8ddb;
    }
</style>
</head>
<body>
    <div class="navbar">
        <h2>SMA Negeri 2 Babarsari</h2>
        <td>
            <tr><a href="index.php">Beranda</a></tr>
            <tr><a href="#">Data Siswa</a></tr>
            <tr><a href="tambah.php">Tambah Siswa</a></tr>
        </td>

        </div>
        <div class="form-box">
<form method="POST" action="inputnilai.php">

    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>NISN/NIS</label>
    <input type="text" name="nis" required>

    <label>Kelas</label>
    <input type="text" name="kelas" required>

    <label>Jenis Kelamin</label>
    <select name="jk" required>
        <option value="">-- Pilih --</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select>

    <!-- NILAI DIPISAH -->
    <label>Pilihan Kelompok / Minat</label>
    <select name="kelompok" required>
        <option value="">-- Pilih Kelompok --</option>
        <option value="Komputer">Komputer</option>
        <option value="Peminatan ipa">Peminatan Ipa</option>
        <option value="Peminatan ips">Peminatan ips</option>
        <option value="Peminatan fisika">peminatan fisika</option>
        <option value="Peminatan Biologi">Peminatan Biologi</option>
        <option value="Peminatan matematika">Peminatan Matematika</option>
    </select>
    <label>Minat Tambahan</label>
    <input type="text" name="tambahan" placeholder="Contoh: Informatika">

    <label>Rumpun Minat</label>
    <input type="text" name="minat" required>

    <label>Jurusan Impian</label>
    <input type="text" name="impian" required>
    <a href="inputnilai.php">
    <button type="submit">Proses Analisis</button>

</form>
    </div>
</body>
</html>