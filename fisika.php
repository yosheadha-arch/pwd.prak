<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fisika</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif; 
        }

        /*backgorund*/
        body {
        height: 100vh;
        background: url('bg.jpg') center/cover no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        /*card*/
        .card {
        background: rgba(255,255,255,0.95);
        width: 70%;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.25);
        position: relative;
        }
/*icon*/
        .icon {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 40px;
        }

        .card h1 {
            font-size: 32px;
            line-height: 1.6;
        }

        .card p {
            margin-bottom: 32px;

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

        .btn:hover {
            backgorund: #2980b9;
        }

        @media(max-width: 768px) {
            .car {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
   <div class="card">

    <div class="icon">⚛️</div>

    <h1>Peminatan Fisika</h1>

    <p>
    Menekankan pada hukum alam, energi, dan teknologi.
    Cocok untuk siswa dengan kemampuan analisis tinggi dan ketelitian.
    </p>

    <h2>Mata Pelajaran Pendukung:</h2>
    <td>
        <tr>Fisika</tr>
        <tr>Matematika</tr>
    </td>

    <h2>Indikator Kesesuaian:</h2>
    <td>
        <tr>Fisika >=85</tr>
        <tr>mstematika >=80</tr>
    </td>

    <h2>Rekomendasi Jurusan:</h2>
    <p>Teknik Mesin, Teknik Elektro, Teknik Sipil, Fisika</p>

    <h2>Prospek Karier:</h2>
    <p>Engineer, Peneliti, Ahli Energi</p>

    <a href="beranda.php" class="btn">Kembali</a>

</div> 
</body>
</html>