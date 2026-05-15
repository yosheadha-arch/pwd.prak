<?php

include 'koneksi.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

/* =========================
   AMBIL DATA BIODATA
========================= */

$nama = $_POST['nama'] ?? '';
$nis = $_POST['nis'] ?? '';
$kelas = $_POST['kelas'] ?? '';
$jk = $_POST['jk'] ?? '';
$kelompok = $_POST['kelompok'] ?? '';

/* =========================
   FUNCTION AMBIL NILAI
========================= */

function ambil($key){
    return isset($_POST[$key]) && $_POST[$key] !== ''
    ? (float)$_POST[$key]
    : 0;
}

/* =========================
   NILAI SEMESTER 1
========================= */

$mtk1 = ambil('mtk1');
$inf1 = ambil('inf1');
$eng1 = ambil('eng1');
$bio1 = ambil('bio1');
$kim1 = ambil('kim1');
$fis1 = ambil('fis1');
$eko1 = ambil('eko1');
$geo1 = ambil('geo1');
$sos1 = ambil('sos1');
$indo1 = ambil('indo1');

/* =========================
   NILAI SEMESTER 2
========================= */

$mtk2 = ambil('mtk2');
$inf2 = ambil('inf2');
$eng2 = ambil('eng2');
$bio2 = ambil('bio2');
$kim2 = ambil('kim2');
$fis2 = ambil('fis2');
$eko2 = ambil('eko2');
$geo2 = ambil('geo2');
$sos2 = ambil('sos2');
$indo2 = ambil('indo2');

/* =========================
   HITUNG RATA-RATA
========================= */

function rata($a, $b){
    return ($a + $b) / 2;
}

/* IPA */
$ipa = (
    rata($bio1, $bio2) +
    rata($kim1, $kim2) +
    rata($fis1, $fis2)
) / 3;

/* IPS */
$ips = (
    rata($eko1, $eko2) +
    rata($geo1, $geo2) +
    rata($sos1, $sos2)
) / 3;

/* KOMPUTER */
$komputer = (
    rata($mtk1, $mtk2) +
    rata($inf1, $inf2)
) / 2;

/* BAHASA */
$bahasa = (
    rata($indo1, $indo2) +
    rata($eng1, $eng2)
) / 2;

$ipa = round($ipa,2);
$ips = round($ips,2);
$komputer = round($komputer,2);
$bahasa = round($bahasa,2);


if($ipa >= $ips && $ipa >= $komputer){

    $jurusan = "IPA";
    $rekomendasi = "Kedokteran, Farmasi, Teknik";

}
elseif($ips >= $ipa && $ips >= $komputer){

    $jurusan = "IPS";
    $rekomendasi = "Manajemen, Hukum, Akuntansi";

}
else{

    $jurusan = "Komputer";
    $rekomendasi = "Informatika, Sistem Informasi";

}


$query = mysqli_query($konek,

"INSERT INTO siswa
(
    nama,
    nisn,
    kelas,
    jenis_kelamin,
    hasil_peminatan,

    matematika_sem1,
    matematika_sem2,

    informatika_sem1,
    informatika_sem2,

    binggris_sem1,
    binggris_sem2,

    biologi_sem1,
    biologi_sem2,

    kimia_sem1,
    kimia_sem2,

    fisika_sem1,
    fisika_sem2,

    ekonomi_sem1,
    ekonomi_sem2,

    geografi_sem1,
    geografi_sem2,

    sosio_sem1,
    sosio_sem2,

    bindo_sem1,
    bindo_sem2
)

VALUES
(
    '$nama',
    '$nis',
    '$kelas',
    '$jk',
    '$jurusan',

    '$mtk1',
    '$mtk2',

    '$inf1',
    '$inf2',

    '$eng1',
    '$eng2',

    '$bio1',
    '$bio2',

    '$kim1',
    '$kim2',

    '$fis1',
    '$fis2',

    '$eko1',
    '$eko2',

    '$geo1',
    '$geo2',

    '$sos1',
    '$sos2',

    '$indo1',
    '$indo2'
)"

);

?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Hasil Analisis</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{

    min-height:100vh;

    background:
    linear-gradient(rgba(15,23,42,0.75),
    rgba(37,99,235,0.65)),
    url('kelas.jpeg');

    background-size:cover;
    background-position:center;

    display:flex;
    justify-content:center;
    align-items:center;

    padding:30px;
}

.box{

    width:100%;
    max-width:500px;

    background:rgba(255,255,255,0.95);

    border-radius:30px;

    padding:40px;

    text-align:center;

    box-shadow:0 15px 40px rgba(0,0,0,0.25);
}

.box h2{

    font-size:38px;

    color:#0f172a;

    margin-bottom:25px;
}

.info{

    margin-bottom:25px;
}

.info p{

    margin:8px 0;

    font-size:17px;

    color:#334155;
}

.nilai-box{

    background:#f8fafc;

    padding:25px;

    border-radius:20px;

    margin-top:20px;

    text-align:left;
}

.nilai-box h3{

    margin-bottom:18px;

    color:#2563eb;
}

.nilai{

    display:flex;
    justify-content:space-between;

    margin-bottom:12px;

    font-size:17px;
}

.hasil{

    margin-top:30px;

    background:#2563eb;

    color:white;

    padding:25px;

    border-radius:20px;
}

.hasil h1{

    font-size:40px;

    margin-bottom:10px;
}

.hasil p{

    font-size:17px;
}

.btn{

    display:inline-block;

    margin-top:30px;

    background:#0f172a;

    color:white;

    text-decoration:none;

    padding:15px 30px;

    border-radius:18px;

    transition:0.3s;
}

.btn:hover{

    background:#1e293b;

    transform:translateY(-2px);
}

</style>

</head>
<body>

<div class="box">

    <h2>Hasil Analisis</h2>

    <div class="info">

        <p><b>Nama:</b> <?= $nama ?></p>
        <p><b>NISN:</b> <?= $nis ?></p>
        <p><b>Kelas:</b> <?= $kelas ?></p>

    </div>

    <div class="nilai-box">

        <h3>Rata-Rata Peminatan</h3>

        <div class="nilai">
            <span>IPA</span>
            <b><?= $ipa ?></b>
        </div>

        <div class="nilai">
            <span>IPS</span>
            <b><?= $ips ?></b>
        </div>

        <div class="nilai">
            <span>Komputer</span>
            <b><?= $komputer ?></b>
        </div>

        <div class="nilai">
            <span>Bahasa</span>
            <b><?= $bahasa ?></b>
        </div>

    </div>

    <div class="hasil">

        <h1><?= $jurusan ?></h1>

        <p><?= $rekomendasi ?></p>

    </div>

    <a href="index.php" class="btn">
        Kembali ke Beranda
    </a>

</div>

</body>
</html>