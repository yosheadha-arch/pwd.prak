<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($konek, "SELECT * FROM siswa WHERE id='$id'");

$row = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $kelas = $_POST['kelas'];
    $jk = $_POST['jenis_kelamin'];
    $minat = $_POST['minat'];
    $jurusan = $_POST['hasil_peminatan'];

    mysqli_query($konek, "UPDATE siswa SET

        nama='$nama',
        nisn='$nisn',
        kelas='$kelas',
        jenis_kelamin='$jk',
        minat='$minat',
        hasil_peminatan='$jurusan'

        WHERE id='$id'
    ");

    header("Location: datasiswa.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- BOOTSTRAP ICON -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="style.css">
<style>
    /* BACKGROUND HALAMAN EDIT */

body{

    margin:0;

    padding:0;

    font-family:Arial, Helvetica, sans-serif;

    background-image:
    linear-gradient(rgba(0,0,0,0.3),
    rgba(0,0,0,0.3)),
    url('sekolah.png');

    background-size:cover;

    background-position:center;

    background-repeat:no-repeat;

    min-height:100vh;
}

/* FORM */

.form-container{

    width:420px;

    margin:60px auto;

    background:rgba(255,255,255,0.95);

    padding:35px;

    border-radius:20px;

    box-shadow:0 10px 30px rgba(0,0,0,0.2);

    backdrop-filter:blur(5px);
}
</style>
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Edit Data Siswa</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="form-container">

    <h2>Edit Data Siswa</h2>

    <form method="POST">

    <div class="input-group">

        <label>Nama</label>

        <input type="text"
        name="nama"
        value="<?= $row['nama']; ?>">

    </div>

    <div class="input-group">

        <label>NIS</label>

        <input type="text"
        name="nis"
        value="<?= isset($row['nisn']) ? $row['nisn'] : ''; ?>">

    </div>

    <div class="input-group">

        <label>Kelas</label>

        <input type="text"
        name="kelas"
        value="<?= $row['kelas']; ?>">

    </div>

    <div class="input-group">

        <label>Jenis Kelamin</label>

        <input type="text"
        name="jenis_kelamin"
        value="<?= $row['jenis_kelamin']; ?>">

    </div>

    <div class="input-group">

        <label>Minat</label>

        <input type="text"
        name="minat"
        value="<?= $row['minat']; ?>">

    </div>

    <div class="input-group">

        <label>Jurusan</label>

        <input type="text"
        name="hasil_peminatan"
        value="<?= $row['hasil_peminatan']; ?>">

    </div>

    <button type="submit" name="update">
        Update Data
    </button>

</form>

</div>

</body>
</html>