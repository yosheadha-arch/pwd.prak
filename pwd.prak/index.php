<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Pemetaan Siswa</title>

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- BOOTSTRAP ICON -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" href="style.css">
<style>

</style>
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

                <div class="total">200</div>

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

                <div class="total">50</div>

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

                <div class="total">40</div>

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

                <div class="total">35</div>

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

                <div class="total">30</div>

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

                <div class="total">25</div>

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

                <div class="total">20</div>

                <div class="desc">
                    Siswa peminatan Matematika
                </div>

            </div>

        </a>

    </div>

</section>

</body>
</html>