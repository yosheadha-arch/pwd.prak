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

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background:#f1f5f9;
}

/* LOGO + JUDUL */
.logo-brand{
    display: flex;
    align-items: center;
    gap: 15px;
}

.logo-brand img{
    width: 55px;
    height: 55px;
    object-fit: cover;
}

.logo-brand h1{
    color: white;
    font-size: 28px;
    font-weight: bold;
    margin: 0;
}

/* ===== NAVBAR ===== */

.navbar-custom{
    width:100%;

    background:#2563eb;

    padding:20px 50px;

    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    color:white;

    font-size:32px;
    font-weight:700;
}

.menu{
    display:flex;
    gap:30px;
}

.menu a{
    color:white;

    text-decoration:none;

    font-size:18px;
    font-weight:500;
}

/* ===== HEADER ===== */

.header{
    padding:50px;
}

.header h1{
    font-size:55px;
    font-weight:700;

    color:#0f172a;

    margin-bottom:10px;
}

.header p{
    font-size:22px;

    color:#64748b;
}

/* ===== DASHBOARD ===== */

.dashboard{
    padding:0 50px 50px;
}

.dashboard-grid{
    display:grid;

    grid-template-columns:
    repeat(auto-fit, minmax(300px,1fr));

    gap:30px;
}

.card-link{
    text-decoration:none;
}

.card-dashboard{
    background:white;

    border-radius:25px;

    padding:35px;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);

    transition:0.3s;
}

.card-dashboard:hover{
    transform:translateY(-5px);
}

.card-top{
    display:flex;
    justify-content:space-between;
    align-items:center;

    margin-bottom:25px;
}

.card-top h2{
    color:#0f172a;

    font-size:35px;
    font-weight:700;
}

.card-top i{
    font-size:45px;

    color:#2563eb;
}

.total{
    font-size:70px;
    font-weight:700;

    color:#0f172a;

    margin-bottom:15px;
}

.desc{
    color:#64748b;

    font-size:20px;
}

/* ===== BIODATA SEKOLAH ===== */

.biodata-sekolah{
    padding:0 50px 50px;
}

.biodata-card{
    background:white;

    border-radius:25px;

    padding:40px;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.biodata-card h2{
    font-size:40px;
    font-weight:700;

    color:#0f172a;

    margin-bottom:40px;

    display:flex;
    align-items:center;
    gap:12px;
}

.biodata-grid{
    display:grid;

    grid-template-columns:
    repeat(auto-fit, minmax(250px,1fr));

    gap:25px;
}

.biodata-item{
    background:#f8fafc;

    padding:25px;

    border-radius:20px;

    border-left:6px solid #2563eb;
}

.biodata-item span{
    display:block;

    color:#64748b;

    font-size:15px;

    margin-bottom:10px;
}

.biodata-item p{
    margin:0;

    color:#0f172a;

    font-size:22px;
    font-weight:600;
}
/* FOOTER */
.footer{
    background: #004b93;
    color: white;
    margin-top: 50px;
    font-family: Arial, sans-serif;
}

/* CONTAINER */
.footer-container{
    width: 90%;
    margin: auto;
    padding: 40px 0;
}

/* BOX */
.footer-box{
    margin-bottom: 40px;
}

.footer-box h2{
    font-size: 34px;
    font-weight: bold;
    margin-bottom: 10px;
}

/* GARIS */
.line{
    width: 100%;
    height: 3px;
    background: white;
    position: relative;
    margin-bottom: 25px;
}

.line::after{
    content: "";
    width: 35%;
    height: 3px;
    background: gold;
    position: absolute;
    left: 0;
    top: 0;
}

/* DESKRIPSI */
.footer-desc{
    font-size: 24px;
    line-height: 1.8;
    margin-bottom: 30px;
}

/* INFO */
.footer-info{
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 25px;
}

.footer-info i{
    font-size: 28px;
    margin-top: 5px;
}

.footer-info h5{
    font-size: 26px;
    margin-bottom: 5px;
}

.footer-info p{
    font-size: 23px;
    line-height: 1.6;
}

/* TAGS */
.tags{
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.tags span{
    border: 2px solid white;
    padding: 12px 20px;
    font-size: 20px;
    transition: 0.3s;
}

.tags span:hover{
    background: white;
    color: #004b93;
}

/* SOSMED */
.social-icons{
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.social-icons a{
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 30px;
    text-decoration: none;
}

.facebook{
    background: #3b5998;
}

.instagram{
    background: #f4b400;
}

.youtube{
    background: #ff4d00;
}

/* COPYRIGHT */
.copyright{
    background: #0066cc;
    text-align: center;
    padding: 20px;
    font-size: 20px;
    border-top: 1px solid rgba(255,255,255,0.3);
}

/* RESPONSIVE HP */
@media(max-width:768px){

    .footer-box h2{
        font-size: 28px;
    }

    .footer-desc{
        font-size: 20px;
    }

    .footer-info h5{
        font-size: 22px;
    }

    .footer-info p{
        font-size: 18px;
    }

    .tags span{
        font-size: 16px;
        padding: 10px 15px;
    }

    .social-icons a{
        width: 60px;
        height: 60px;
        font-size: 25px;
    }

    .copyright{
        font-size: 16px;
    }

}

</style>
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
</footer>

</body>
</html>