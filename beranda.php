<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pemetaan Siswa</title>

<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins";
}

/* ===== NAVBAR ===== */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 40px;
    background: #1da1f2;
    color: white;
}

.navbar h1 {
    font-family: "Poppins";
    font-size: 22px;
}

.navbar ul {
    display: flex;
    gap: 20px;
    list-style: none;
}

.navbar ul li {
    cursor: pointer;
}

/* ===== HERO ===== */
.hero {
    min-height: 100vh;
    background: url('gambar1.jpg') center/cover no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero-box {
    background: rgba(255,255,255,0.85);
    padding: 40px;
    border-radius: 15px;
    text-align: center;
}

.hero-box h1 {
    font-size: 50px;
    color: #1da1f2;
}

.total {
    margin: 20px 0;
    background: #3498db;
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 20px;
}

.nilai {
    display: flex;
    gap: 10px;
    justify-content: center;
    margin: 20px 0;
}

.nilai div {
    padding: 10px;
    color: white;
    border-radius: 5px;
}

.tinggi { background: green; }
.sedang { background: orange; }
.rendah { background: red; }

.hero button {
    padding: 12px 25px;
    border: none;
    background: #3498db;
    color: white;
    border-radius: 10px;
    cursor: pointer;
}

/* ===== PEMINATAN ===== */
.section {
    min-height:100vh;
    padding: 60px;
    background: url('gambar1.jpg') center/cover no-repeat;
}

.overlay {
    backdrop-filter: blur(6px);
}

/* GRID */
.grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.card {
    background: #eee;
    padding: 25px;
    border-radius: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.3s;
}

.card:hover {
    transform: scale(1.05);
}

.card button {
    background: #3498db;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
}

/* RESPONSIVE */
@media(max-width: 768px){
    .grid {
        grid-template-columns: 1fr;
    }
}
</style>

</head>
<body>

<!-- ===== NAVBAR ===== -->
<div class="navbar">
    <h1>SMA NEGERI 2 BABARSARI</h1>
    <ul>
        <li>Beranda</li>
        <li>Data Siswa</li>
        <li>Tambah Siswa</li>
    </ul>
</div>

<!-- ===== HERO ===== -->
<section class="hero">
    <div class="hero-box">
        <h1>WELCOME</h1>

        <div class="total">
            TOTAL SISWA <br> 200 SISWA
        </div>

        <div class="nilai">
            <div class="tinggi">85 - 100</div>
            <div class="sedang">70 - 84</div>
            <div class="rendah">< 70</div>
        </div>
            <a href="analisis.php">
            <button>Mulai Input Data</button>
            </a>
    </div>
</section>

<!-- ===== PEMINATAN ===== -->
<section class="section" id="peminatan">
    <div class="overlay">
        <div class="grid">

            <div class="card">
                <h3>Peminatan Komputer</h3>
                <a href="komputer.php">
                <button>Lihat detail</button>
                </a>
            </div>

            <div class="card">
                <h3>Peminatan IPA</h3>
                <a href="ipa.php">
                <button>Lihat detail</button>
                </a>
            </div>

            <div class="card">
                <h3>Peminatan IPS</h3>
                <a href="ips.php">
                <button>Lihat detail</button>
                </a>
            </div>

            <div class="card">
                <h3>Peminatan Fisika</h3>
                <a href="fisika.php">
                <button>Lihat detail</button>
                </a>
            </div>

            <div class="card">
                <h3>Peminatan Biologi</h3>
                <a href="biologi.php">
                <button>Lihat detail</button>
                </a>
            </div>

            <div class="card">
                <h3>Peminatan Matematika</h3>
                <a href="matematika.php">
                <button>Lihat detail</button>
                </a>
            </div>

        </div>
    </div>
</section>

<script>
function scrollDown() {
    document.getElementById("peminatan").scrollIntoView({
        behavior: "smooth"
    });
}
</script>

</body>
</html>