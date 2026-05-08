<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            background: url('') center/cover no-repeat;
            display: center;
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

        .card h1{
            font-size:  32px;
            margin-bottom: 10px;
        }

        .card p {
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .card h2{
            margin-top: 20px;
            font-size: 22px;
        }

        .card ul{
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

        .btn:hover {
            background: #2980b9;
        }

        @media(max-widht: 768px) {
            .card {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
        <div class="card">

        <div class="icon">🧬</div>

            <h1>Peminatan Biologi</h1>

            <p>
                Berfokus pada makhluk hidup dan sistem kehidupan.
                Cocok bagi siswa yang tertarik pada kesehatan dan lingkungan.
            </p>

            <h2>Mata Pelajaran Pendukung:</h2>
            <td>
                <tr>Fisika</tr>
                <tr>Matematika</tr>
                <tr>Biologi</tr>
                <tr>kimia</tr>
            </td>

            <h2>Indikator Kesesuaian:</h2>
            <td>
                <tr>Biologi >= 85</tr>
                <tr>kimia >= 80</tr>
            </td>
        

            <h2>Rekomendasi Jurusan:</h2>
             <p>Kedokteran, Kedokteran Hewan, Biologi, Kehutanan</p>

             <h2>Prospek Karier:</h2>
             <p>Dokter, Peneliti, Ahli Lingkungan</p>

            <a href="beranda.php" class="btn">Kembali</a>

        </div>
</body>
</html>