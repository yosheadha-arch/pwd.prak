<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

<style>
    body{
        margin: 0;
        font-family: Arial, sans-serif;
    }

    /*background*/
    .bg {
        height: 100vh;
        background: url('') center/cover no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /*card*/ 
    .card {
        background: white;
        padding: 30px;
        width: 60%;
        border-radius: 10px;
    }

    h1 {
        margin-bottom: 10px;
    }

    h2 {
        margin-top:20px;
    }

    ul{
        margin-left: 20px;
    }

    .back {
        margin-top: 20px;
        display: inline-block;
        background: #3498db;
        color: white;
        padding: 8px 15px;
        text-decoration: none;
        border-radius: 5px;
    }
</style>
</head>

<body>
    
<div class="bg">
    <div class="card">
        <h1>Peminatan komputer</h1>
        <p>
            Peminatan ini berfokus pada pengembangan teknologi, pemrograman, dan sistem informasi. Cocok bagi siswa yang memiliki pola pikir logis, sistematis, dan tertarik pada dunia digital.
        </p>
        <h2>Mata pelajaran pendukung:</h2>
        <td>
            <tr>Matematika</tr>
            <tr>Informatika</tr>
            <tr>Bahasa Inggris</tr>
        </td>
        <h2>Indikator kesesuaian:</h2>
        <td>
            <tr>Matematika ≥ 80</tr>
            <tr>Infromatika ≥ 85</tr>
            <tr>Bahasa Inggris ≥ 75</tr>
        </td>

        <h2>Rekomendasi Jurusan:</h2>
        <p>Software Developer, Data Analyst, Cyber Security, UI?UX Designer</p>

        <a href="beranda.php" class="back">Kembali</a>
    </div>
</div>

</body>
</html>