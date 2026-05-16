<?php

include 'koneksi.php';

$queryKomputer = mysqli_query($konek,
"SELECT COUNT(*) AS jumlah_komputer
FROM siswa
WHERE minat='Komputer'");

$dataKomputer = mysqli_fetch_assoc($queryKomputer);

$jumlahKomputer = $dataKomputer['jumlah_komputer'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ips</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<style>
    * { 
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
    }

    /*background*/
    body{
        min-height: 100vh;
        background:  linear-gradient(rgba(15,23,42,0.8), rgba(37,99,235,0.7)),
        url('bg.jpg');
        background-size: cover;
        background-position:center;
        display:flex;
        justify-content:center;
        align-items:center;
        padding:40px;
    }

    /*card*/ 
    .card {
        width: 100%;
        max-widht: 1100px;
        background: rgba(255,255,255,0.95);
        border-radius:25px;
        padding:45px;
        box-shadow:0 15px 35px rgba(0,0,0,0.25);
    }

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

/* BOX */

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

        <i class="bi bi-bank2"></i>

        <h1>
            Peminatan Komputer
        </h1>

    </div>

    <!-- DESKRIPSI -->

    <p class="desc">

        Peminatan komputer berfokus pada teknologi,
        pemrograman, pengembangan software,
        sistem informasi, jaringan komputer,
        dan dunia digital modern.

        Cocok bagi siswa yang memiliki kemampuan
        logika, analisis, kreativitas teknologi,
        dan ketertarikan pada dunia IT.
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
                <li>Matematika</li>
                <li>Informatika</li>
                <li>Bahasa Inggris</li>
            </ul>

        </div>

        <!-- INDIKATOR -->

        <div class="box">

            <h2>
                <i class="bi bi-bar-chart-fill"></i>
                Indikator Kesesuaian
            </h2>

            <ul>
                <li>Nilai Komputer ≥ 85</li>
                <li>Logika dan analisis baik</li>
                <li>Tertarik teknologi</li>
                <li>Suka problem solving</li>
            </ul>

        </div>

        <!-- JURUSAN -->

        <div class="box">

            <h2>
                <i class="bi bi-mortarboard-fill"></i>
                Rekomendasi Jurusan
            </h2>

            <p>

                Teknik Informatika,
                Sistem Informasi,
                Ilmu Komputer,
                Rekayasa Perangkat Lunak,
                Cyber Security.

            </p>

        </div>

        <!-- KARIER -->

        <div class="box">

            <h2>
                <i class="bi bi-briefcase-fill"></i>
                Prospek Karier
            </h2>

            <p>

                Programmer,
                Web Developer,
                UI/UX Designer,
                Data Analyst,
                Cyber Security Engineer,
                Software Engineer.

            </p>

        </div>

    </div>

    <div class="card-jumlah-komputer">

        <div class="ips-icon">
            <i class="fa-solid fa-flask"></i>
        </div>

        <div class="komputer-info">

            <p>Jumlah Siswa Minat Komputer</p>

            <h1><?= $jumlahKomputer; ?></h1>

        </div>

    </div>

    <!-- BUTTON -->

    <a href="index.php" class="btn">

        <i class="bi bi-arrow-left-circle-fill"></i>

        Kembali ke Dashboard

    </a>

</div>

</body>
</html>