<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai']
    mysqli_query($conn, "INSERT INTO siswa (nama, nilai) VALUES ('$nama','$nilai')");
    header("Location: beranda.php");
}
?>