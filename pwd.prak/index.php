<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

/* TOTAL SISWA */
$query_total = mysqli_query(
    $konek,
    "SELECT COUNT(*) as total FROM siswa"
);

$total_siswa = mysqli_fetch_assoc($query_total);


/* TOTAL IPA */
$query_ipa = mysqli_query(
    $konek,
    "SELECT COUNT(*) as total 
    FROM siswa 
    WHERE hasil_peminatan='IPA'"
);

$total_ipa = mysqli_fetch_assoc($query_ipa);


/* TOTAL IPS */
$query_ips = mysqli_query(
    $konek,
    "SELECT COUNT(*) as total 
    FROM siswa 
    WHERE hasil_peminatan='IPS'"
);

$total_ips = mysqli_fetch_assoc($query_ips);


/* TOTAL KOMPUTER */
$query_komputer = mysqli_query(
    $konek,
    "SELECT COUNT(*) as total 
    FROM siswa 
    WHERE hasil_peminatan='Komputer'"
);

$total_komputer = mysqli_fetch_assoc($query_komputer);


/* TOTAL BIOLOGI */
$query_bio = mysqli_query(
    $konek,
    "SELECT COUNT(*) as total 
    FROM siswa 
    WHERE hasil_peminatan='Biologi'"
);

$total_bio = mysqli_fetch_assoc($query_bio);


/* TOTAL FISIKA */
$query_fisika = mysqli_query(
    $konek,
    "SELECT COUNT(*) as total 
    FROM siswa 
    WHERE hasil_peminatan='Fisika'"
);

$total_fisika = mysqli_fetch_assoc($query_fisika);


/* TOTAL MATEMATIKA */
$query_mtk = mysqli_query(
    $konek,
    "SELECT COUNT(*) as total 
    FROM siswa 
    WHERE hasil_peminatan='Matematika'"
);

$total_mtk = mysqli_fetch_assoc($query_mtk);

?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Pemetaan Siswa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" href="style.css">

</head>
<body>

<!-- ===== NAVBAR ===== -->

<div class="navbar-custom">

    <div class="logo">
        SMA NEGERI 2 BABARSARI
    </div>

    <div class="menu">
        <a href="index.php">Beranda</a>
        <a href="datasiswa.php">Data Siswa</a>
        <a href="tambah.php">Tambah Siswa</a>
        <a href="logout.php">Logout</a>
    </div>

</div>

<!-- ===== HEADER ===== -->

<div class="header">

    <h1>Dashboard Pemetaan Siswa</h1>
    <p>Sistem pemetaan minat dan bakat siswa</p>

</div>

<!-- ===== DASHBOARD ===== -->

<section class="dashboard">

    <div class="dashboard-grid">

        <!-- TOTAL SISWA -->
        <a href="datasiswa.php" class="card-link">

            <div class="card-dashboard">

                <div class="card-top">
                    <h2>Total Siswa</h2>
                    <i class="bi bi-people-fill"></i>
                </div>

                <div class="total">
                    <?= $total_siswa['total']; ?>
                </div>

                <div class="desc">
                    Jumlah seluruh siswa
                </div>

            </div>

        </a>

        <!-- IPA -->
        <a href="ipa.php" class="card-link">

            <div class="card-dashboard">

                <div class="card-top">
                    <h2>Peminatan IPA</h2>
                    <i class="bi bi-capsule-pill"></i>
                </div>

                <div class="total">
                    <?= $total_ipa['total']; ?>
                </div>

                <div class="desc">
                    Siswa peminatan IPA
                </div>

            </div>

        </a>

        <!-- IPS -->
        <a href="ips.php" class="card-link">

            <div class="card-dashboard">

                <div class="card-top">
                    <h2>Peminatan IPS</h2>
                    <i class="bi bi-bank"></i>
                </div>

                <div class="total">
                    <?= $total_ips['total']; ?>
                </div>

                <div class="desc">
                    Siswa peminatan IPS
                </div>

            </div>

        </a>

        <!-- KOMPUTER -->
        <a href="komputer.php" class="card-link">

            <div class="card-dashboard">

                <div class="card-top">
                    <h2>Komputer</h2>
                    <i class="bi bi-pc-display"></i>
                </div>

                <div class="total">
                    <?= $total_komputer['total']; ?>
                </div>

                <div class="desc">
                    Siswa bidang komputer
                </div>

            </div>

        </a>

        <!-- BIOLOGI -->
        <a href="biologi.php" class="card-link">

            <div class="card-dashboard">

                <div class="card-top">
                    <h2>Peminatan Biologi</h2>
                    <i class="bi bi-heart-pulse-fill"></i>
                </div>

                <div class="total">
                    <?= $total_bio['total']; ?>
                </div>

                <div class="desc">
                    Siswa peminatan Biologi
                </div>

            </div>

        </a>

        <!-- FISIKA -->
        <a href="fisika.php" class="card-link">

            <div class="card-dashboard">

                <div class="card-top">
                    <h2>Peminatan Fisika</h2>
                    <i class="bi bi-lightning-charge-fill"></i>
                </div>

                <div class="total">
                    <?= $total_fisika['total']; ?>
                </div>

                <div class="desc">
                    Siswa peminatan Fisika
                </div>

            </div>

        </a>

        <!-- MATEMATIKA -->
        <a href="matematika.php" class="card-link">

            <div class="card-dashboard">

                <div class="card-top">
                    <h2>Peminatan Matematika</h2>
                    <i class="bi bi-calculator-fill"></i>
                </div>

                <div class="total">
                    <?= $total_mtk['total']; ?>
                </div>

                <div class="desc">
                    Siswa peminatan Matematika
                </div>

            </div>

        </a>

    </div>

</section>
</section>

<!-- ===== BIODATA SEKOLAH ===== -->

<section class="biodata-sekolah">

    <div class="biodata-card">

        <h2>
            <i class="bi bi-building"></i>
            Biodata Sekolah
        </h2>

        <div class="biodata-grid">

            <div class="biodata-item">
                <span>Nama Sekolah</span>
                <p>SMA Negeri 2 Babarsari</p>
            </div>

            <div class="biodata-item">
                <span>NPSN</span>
                <p>12345678</p>
            </div>

            <div class="biodata-item">
                <span>Alamat</span>
                <p>Jl. Babarsari No. 10 Yogyakarta</p>
            </div>

            <div class="biodata-item">
                <span>Kepala Sekolah</span>
                <p>Drs. Budi Santoso</p>
            </div>

            <div class="biodata-item">
                <span>Email</span>
                <p>sman2babarsari@gmail.com</p>
            </div>

            <div class="biodata-item">
                <span>Telepon</span>
                <p>0812-3456-7890</p>
            </div>

        </div>

    </div>

</section>

</body>
</html>
</body>
</html>