<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        height: 100vh;
        background: url('bg.jpg') center/cover no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card {
        background: rgba(255,255,255,0.95);
        width: 70%;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.25);
        position: relative;
    }

    .icon {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 35px;
    }

    .card h1 {
        font-size: 32px;
        margin-bottom: 10px;
    }

    .card p {
        margin-bottom: 32px;
        line-height: 1.6;
    }

    .card h2 {
        margin-top: 20px;
        font-size: 22px;
    }

    .card ul {
        margin-left: 20px;
        line-height: 1.7;
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

    @media(max-width: 768px) {
        .card {
            width: 90%;
            padding: 20px;
        }
    }
</style>
<body>
    <div class="icon">📐</div>

    <h1>Peminatan Matematika</h1>

    <p>Mengembangkan kemampuan logika, analisis, dan pemecahan masalah. Cocok bagi siswa yang teliti dan sistematis.</p>

    <h2>Mata Pelajar Pendukung:</h2>

    <ul>
        <li>Matematika</li>
    </ul>

    <h2>Indikator Kesesuaian</h2>
    <ul>
        <li>Matematika >= 85</li>
    </ul>

    <h2>Rekomendasi Jurusan</h2>
    <p>Matematika, Statistika, Aktuaria, Data Science</p>

    <h2>Prospek Karier:</h2>
    <p>Data Scientist, Aktuaris, Analis Keuangan</p>

    <a href="beranda.php" class="btn">Kembali</a>
</body>
</html>