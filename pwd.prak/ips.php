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
        height: 100vh;
        background: url('') center/cover no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /*card*/ 
    .card {
        background-attachment: rgba(255,255,255,0.95);
        width: 70%;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.25);
        position: relative;
    }

    /*icon*/
    .card h1 {
        font-size: 32px;
        margin-bottom: 10px;
    }
    
    .card p {
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .card h2 {
        margin-stop: 20px;
        font-size: 22px;
    }

    .card ul{
            margin-left: 20px;
            line-height: 1.7;
    }

    /*button*/ 
    .btn {
        display: inline-block;
        margin-top: 25px;
        padding: 10px 20px;
        background: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        cursor: pointer;
    }

    .btn {
        display: inline-block;
        margin-top: 25px;
        padding: 10px 20px;
        background: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        cursor: pointer;
    }

    .btn:hover {
        background: #2980b9;
    }

    /*rsponsive*/
    @media(max-width: 768px) {
        .card {
            width: 90%;
            padding: 20px;
        }
    }
</style>
</head>
<body>
    <div class="card">
        <div class="header">
            <i class="bi bi-bank2"></i>
            <h1>
                    Peminatan Pengetahuan Sosial (IPS)
            </h1>
        </div>

        <p class="desc">
            Peminatan IPS berfokus pada ilmu sosial,
        ekonomi, geografi, sejarah, dan interaksi manusia
        dalam kehidupan bermasyarakat.

        Cocok bagi siswa yang memiliki kemampuan komunikasi,
        analisis sosial, kepemimpinan, serta minat
        dalam bidang bisnis dan hubungan sosial.

        </p>

        <div class="grid">
            <div class="box">
                <h2>
                    <i class="bi bi-book-fill"></i>
                    Mata Pelajaran Pendukung
                </h2>

                <ul>
                    <li>Ekonomi</li>
                    <li>Geografi</li>
                    <li>Sosiologi</li>
                    <li>Sejarah</li>
                </ul>
            </div>

            <div class="box">
                <h2>
                    <i class="bi bi-mortarboard-fill"></i>
                    Rekomendasi Jurusan
                </h2>

                <p>
                    Manajemen,
                    Akuntansi,
                    Ilmu Komunikasi,
                    Hubungan Internasional,
                    Hukum,
                    Administrasi Bisnis
                </p>
            </div>

            <div class="box">

            <h2>
                <i class="bi bi-briefcase-fill"></i>
                Prospek Karier
            </h2>

            <p>

                Pengusaha,
                Konsultan,
                Diplomat,
                Content Strategist,
                Marketing,
                HRD,
                Pegawai Pemerintahan

            </p>

            </div>

        </div>

        <a href="index.php" class="btn">

        <i class="bi bi-arrow-left-circle-fill"></i>

        Kembali ke Dashboard

        </a>

    </div>
</body>
</html>