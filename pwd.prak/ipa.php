<?php

include 'koneksi.php';

$queryIPA = mysqli_query($konek, 
"SELECT COUNT(*) AS jumlah_ipa 
FROM siswa 
WHERE hasil_peminatan='IPA'");

$dataIPA = mysqli_fetch_assoc($queryIPA);

$jumlahIPA = $dataIPA['jumlah_ipa'];

?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Peminatan IPA</title>

<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- BOOTSTRAP ICON -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

/* BODY */

body{
    min-height:100vh;

    background:
    linear-gradient(rgba(15,23,42,0.8), rgba(37,99,235,0.7)),
    url('gambar1.jpg');

    background-size:cover;
    background-position:center;

    display:flex;
    justify-content:center;
    align-items:center;

    padding:40px;
}

/* CARD */

.card{
    width:100%;
    max-width:1100px;

    background:rgba(255,255,255,0.95);

    backdrop-filter:blur(10px);

    border-radius:25px;

    padding:45px;

    box-shadow:0 15px 35px rgba(0,0,0,0.25);

    position:relative;
}

/* HEADER */

.header{
    display:flex;
    align-items:center;
    gap:20px;

    margin-bottom:30px;
}

.header i{
    font-size:70px;
    color:#2563eb;
}

.header h1{
    font-size:42px;
    color:#0f172a;
}

/* DESKRIPSI */

.desc{
    color:#475569;
    line-height:1.9;
    margin-bottom:40px;
    font-size:16px;
}

/* GRID */

.grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:30px;
}

/* CARD ITEM */

.box{
    background:#f8fafc;
    padding:30px;
    border-radius:20px;
    transition:0.3s;
}

.box:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 20px rgba(0,0,0,0.08);
}

.box h2{
    color:#0f172a;
    margin-bottom:18px;
    font-size:22px;
}

.box ul{
    padding-left:20px;
}

.box li{
    margin-bottom:12px;
    color:#475569;
    line-height:1.7;
}

.box p{
    color:#475569;
    line-height:1.8;
}

/* BUTTON */

.btn{
    display:inline-flex;
    align-items:center;
    gap:10px;

    margin-top:40px;

    padding:14px 24px;

    background:#2563eb;
    color:white;

    text-decoration:none;

    border-radius:12px;

    font-weight:600;

    transition:0.3s;
}

.btn:hover{
    background:#1d4ed8;
    transform:translateY(-3px);
}

/* RESPONSIVE */

@media(max-width:768px){

    .card{
        padding:30px 20px;
    }

    .header{
        flex-direction:column;
        text-align:center;
    }

    .header h1{
        font-size:30px;
    }

    .grid{
        grid-template-columns:1fr;
    }
}

</style>

</head>

<body>

<div class="card">

    <!-- HEADER -->

    <div class="header">

        <i class="bi bi-capsule-pill"></i>

        <h1>
            Peminatan Pengetahuan Alam (IPA)
        </h1>

    </div>

    <!-- DESKRIPSI -->

    <p class="desc">

        Peminatan IPA berorientasi pada pemahaman ilmiah,
        penelitian, eksperimen, dan analisis fenomena alam.

        Cocok untuk siswa yang memiliki rasa ingin tahu tinggi,
        kemampuan analisis yang baik, serta minat dalam bidang
        sains dan kesehatan.

    </p>

    <!-- GRID -->

    <div class="grid">

        <!-- MAPEL -->

        <div class="box">

            <h2>
                <i class="bi bi-book-fill"></i>
                Mata Pelajaran Pendukung
            </h2>

            <ul>
                <li>Biologi</li>
                <li>Kimia</li>
                <li>Fisika</li>
                <li>Matematika</li>
            </ul>

        </div>

        <!-- INDIKATOR -->

        <div class="box">

            <h2>
                <i class="bi bi-bar-chart-fill"></i>
                Indikator Kesesuaian
            </h2>

            <ul>
                <li>Biologi ≥ 80</li>
                <li>Kimia ≥ 80</li>
                <li>Fisika ≥ 75</li>
                <li>Analisis dan logika baik</li>
            </ul>

        </div>

        <!-- JURUSAN -->

        <div class="box">

            <h2>
                <i class="bi bi-mortarboard-fill"></i>
                Rekomendasi Jurusan
            </h2>

            <p>

                Kedokteran,
                Farmasi,
                Bioteknologi,
                Ilmu Gizi,
                Keperawatan,
                Teknik Kimia,
                Teknik Lingkungan

            </p>

        </div>

        <!-- KARIER -->

        <div class="box">

            <h2>
                <i class="bi bi-briefcase-fill"></i>
                Prospek Karier
            </h2>

            <p>

                Dokter,
                Peneliti,
                Analis Laboratorium,
                Ahli Gizi,
                Apoteker,
                Dosen,
                Saintis

            </p>

        </div>

    </div>

    <div class="card-jumlah-ipa">

        <div class="ipa-icon">
            <i class="fa-solid fa-flask"></i>
        </div>

        <div class="ipa-info">

            <p>Jumlah Siswa Minat IPA</p>

            <h1><?= $jumlahIPA; ?></h1>

        </div>

    </div>

    <!-- BUTTON -->

    <a href="index.php" class="btn">

    <i class="bi bi-arrow-left-circle-fill"></i>

    Kembali ke Beranda

</a>

</div>

</body>
</html>