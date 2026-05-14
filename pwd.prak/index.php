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

<!-- GOOGLE FONT -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background:#eef1f5;
}

/* ===== NAVBAR ===== */

.navbar-custom{
    width:100%;
    background:#3563ff;
    padding:18px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    color:white;
    font-size:24px;
    font-weight:600;
}

.menu{
    display:flex;
    gap:25px;
}

.menu a{
    text-decoration:none;
    color:white;
    font-size:16px;
    transition:0.3s;
}

.menu a:hover{
    opacity:0.7;
}

/* ===== HEADER ===== */

.header{
    padding:50px;
}

.header h1{
    font-size:40px;
    font-weight:700;
    color:#001b52;
}

.header p{
    margin-top:10px;
    color:#6c7a92;
    font-size:18px;
}

/* ===== DASHBOARD ===== */

.dashboard{
    padding:0 50px 50px;
}

.dashboard-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

/* ===== CARD ===== */

.card-link{
    text-decoration:none;
}

.card-dashboard{
    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
    transition:0.3s;
}

.card-dashboard:hover{
    transform:translateY(-5px);
}

.card-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.card-top h2{
    font-size:30px;
    font-weight:600;
    color:black;
}

.card-top i{
    font-size:40px;
    color:#3563ff;
}

.total{
    margin-top:20px;
    font-size:50px;
    font-weight:700;
    color:#001b52;
}

.desc{
    margin-top:10px;
    color:#6c7a92;
    font-size:18px;
}

/* ===== RESPONSIVE ===== */

@media(max-width:992px){

    .dashboard-grid{
        grid-template-columns:repeat(2,1fr);
    }

}

@media(max-width:768px){

    .navbar-custom{
        flex-direction:column;
        gap:15px;
    }

    .menu{
        flex-wrap:wrap;
        justify-content:center;
    }

    .dashboard-grid{
        grid-template-columns:1fr;
    }

    .header{
        padding:30px;
    }

    .dashboard{
        padding:0 30px 30px;
    }

}

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