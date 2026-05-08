<?php
include 'koneksi.php'

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    mysqli_query($konek, "INSERT INTO siswa (nama, nilai) VALUES ('$nama','$nilai')");
    header("Location: beranda.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>

    <form method="POST">
        Nama: <br> 
        <input type="text" name="nama" required><br><br>

        Nilai: <br>
        <input type="number" name="nilai" required> <br><br>

        <button type="number" name="simpan">Simpan</button>
    </form>
</body>
</html>