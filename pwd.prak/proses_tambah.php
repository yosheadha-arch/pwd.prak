<?php

include 'koneksi.php';

// ambil data

$nama      = $_POST['nama'];
$nis       = $_POST['nis'];
$kelas     = $_POST['kelas'];
$jk        = $_POST['jk'];
$kelompok  = $_POST['kelompok'];


// CEK NIS

$cek = mysqli_query($conn,
"SELECT * FROM siswa WHERE nis='$nis'");

if(mysqli_num_rows($cek) > 0){

    echo "
    <script>

        alert('NIS sudah terdaftar!');

        window.location='tambah.php';

    </script>
    ";

}else{

    // SIMPAN DATA

    mysqli_query($conn,
    "INSERT INTO siswa
    (nama, nis, kelas, jk, kelompok)

    VALUES

    ('$nama','$nis','$kelas','$jk','$kelompok')");

    echo "
    <script>

        alert('Data berhasil ditambahkan');

        window.location='input_nilai.php';

    </script>
    ";
}

?>