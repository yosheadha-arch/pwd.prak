<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Peminatan Komputer</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
    linear-gradient(rgba(15,23,42,0.8), rgba(37,99,235,0.7)),
    url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1400');

    background-size:cover;
    background-position:center;

    padding:50px;
}

.container{
    max-width:1100px;
    margin:auto;

    background:white;

    border-radius:25px;

    padding:45px;

    box-shadow:0 10px 35px rgba(0,0,0,0.2);
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

.desc{
    color:#475569;
    line-height:1.9;
    margin-bottom:40px;
}

.grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:30px;
}

.card{
    background:#f8fafc;
    padding:30px;
    border-radius:20px;
}

.card h2{
    color:#0f172a;
    margin-bottom:20px;
}

.card ul{
    padding-left:20px;
}

.card li{
    margin-bottom:12px;
    color:#475569;
}

.card p{
    color:#475569;
    line-height:1.8;
}

.btn{
    display:inline-block;
    margin-top:40px;

    padding:14px 22px;

    background:#2563eb;
    color:white;

    text-decoration:none;

    border-radius:12px;
}

.btn:hover{
    background:#1d4ed8;
}

@media(max-width:768px){

    .grid{
        grid-template-columns:1fr;
    }

    .header{
        flex-direction:column;
        text-align:center;
    }

    .header h1{
        font-size:32px;
    }
}

</style>
</head>
<body>

<div class="container">

    <div class="header">

        <i class="bi bi-pc-display"></i>

        <h1>Peminatan Komputer</h1>

    </div>

    <p class="desc">

        Peminatan komputer berfokus pada teknologi,
        pemrograman, pengembangan software,
        sistem informasi, jaringan komputer,
        dan dunia digital modern.

        Cocok bagi siswa yang memiliki kemampuan
        logika, analisis, kreativitas teknologi,
        dan ketertarikan pada dunia IT.

    </p>

    <div class="grid">

        <div class="card">

            <h2>Mata Pelajaran Pendukung</h2>

            <ul>
                <li>Matematika</li>
                <li>Informatika / TIK</li>
                <li>Bahasa Inggris</li>
                <li>Logika Komputer</li>
            </ul>

        </div>

        <div class="card">

            <h2>Indikator Kesesuaian</h2>

            <ul>
                <li>Nilai Komputer ≥ 85</li>
                <li>Logika dan analisis baik</li>
                <li>Tertarik teknologi</li>
                <li>Suka problem solving</li>
            </ul>

        </div>

        <div class="card">

            <h2>Rekomendasi Jurusan</h2>

            <p>

                Teknik Informatika,
                Sistem Informasi,
                Ilmu Komputer,
                Rekayasa Perangkat Lunak,
                Cyber Security.

            </p>

        </div>

        <div class="card">

            <h2>Prospek Karier</h2>

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

    <a href="index.php" class="btn">

        ← Kembali ke Beranda

    </a>

</div>

</body>
</html>