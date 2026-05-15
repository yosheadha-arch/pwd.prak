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

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- BOOTSTRAP ICON -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="style.css">

<script>
function toggleMenu(){
    let menu = document.getElementById("dropdownMenu");

    if(menu.style.display === "block"){
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }
}
</script>

</styl>
</head>
<body>

<!-- ===== NAVBAR ===== -->

<div class="navbar-custom">

    <div class="logo-brand">
    
    <img src="logosekolah.png">

    <h1>SMA NEGERI 2 BABARSARI</h1>

    </div>

    <div class="menu">
        <a href="index.php">Beranda</a>
        <a href="datasiswa.php">Data Siswa</a>
        <a href="tambah.php">Tambah Siswa</a>
        <a href="logout.php">Logout</a>
    </div>

    <!-- PROFILE DROPDOWN -->
    <div class="profile-dropdown">

    <div class="profile" onclick="toggleMenu()">
        <img src="profile.jpg">
        <span>Admin</span>
    </div>

    <div class="dropdown-menu" id="dropdownMenu">
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
    </div>

</div>

</div>

<!-- ===== HEADER ===== -->

<div class="header">

    <h1>Dashboard Pemetaan Siswa</h1>

    <p>
        Sistem pemetaan minat dan bakat siswa
    </p>

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
                    Siswa peminatan BiologiII
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

<!-- ===== FOOTER ===== -->

<footer class="footer">

    <div class="footer-container">

        <!-- HUBUNGI KAMI -->
        <div class="footer-box">

            <h2>Hubungi Kami</h2>
            <div class="line"></div>

            <p class="footer-desc">
                SMA Negeri 2 Babarsari • Beriman, Bertaqwa,
                Bermutu, Mandiri
            </p>

            <div class="footer-info">
                <i class="bi bi-geo-alt-fill"></i>

                <div>
                    <h5>Alamat</h5>
                    <p>Jl. Babarsari No. 10 Yogyakarta</p>
                </div>
            </div>

            <div class="footer-info">
                <i class="bi bi-telephone-fill"></i>

                <div>
                    <h5>Telepon</h5>
                    <p>(0274) 123456</p>
                </div>
            </div>

            <div class="footer-info">
                <i class="bi bi-envelope-fill"></i>

                <div>
                    <h5>Email</h5>
                    <p>sman2babarsari@gmail.com</p>
                </div>
            </div>

        </div>

        <!-- TAGS -->
        <div class="footer-box">

            <h2>Tags</h2>
            <div class="line"></div>

            <div class="tags">

                <span>IPA</span>
                <span>IPS</span>
                <span>Biologi</span>
                <span>Fisika</span>
                <span>Matematika</span>
                <span>Komputer</span>
                <span>OSIS</span>
                <span>Prestasi</span>

            </div>

        </div>

        <!-- IKUTI KAMI -->
        <div class="footer-box">

            <h2>Ikuti Kami</h2>
            <div class="line"></div>

            <div class="social-icons">

                <a href="#" class="facebook">
                    <i class="bi bi-facebook"></i>
                </a>

                <a href="#" class="instagram">
                    <i class="bi bi-instagram"></i>
                </a>

                <a href="#" class="youtube">
                    <i class="bi bi-youtube"></i>
                </a>

            </div>

        </div>

    </div>

    <!-- COPYRIGHT -->
    <div class="copyright">
        Copyright © 2026 SMA Negeri 2 Babarsari
    </div>

</footer>
<<<<<<< HEAD
</footer>
<script>
function toggleMenu(){
    let menu = document.getElementById("dropdownMenu");

    if(menu.style.display === "block"){
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }
}
</script>
=======
>>>>>>> 84d6cf88d58d3a728aa532bebd1060b95c468988
</body>
</html>