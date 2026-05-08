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

    /*background*/
    body {
        height: 100vh;
        background: url('') center/cover no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /*card*/
    .card {
        background-color: #fff;
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
        font-size: 40px;
    }
    /*judul*/
    .card h1{
        font-size:  32px;
        margin-bottom: 10px
    }

    .card p{
        margin-bottom: 20px;
        font-size: 22px;
    }

    
</style>
</head>

<body>
    <div class="card">

    <div class="icon">🧪</div>

    <h1>Peminatan Pengetahuan Alam (IPA)</h1>

    <p>
    Berorientasi pada pemahaman ilmiah dan eksperimen terhadap fenomena alam.
    Cocok untuk siswa dengan rasa ingin tahu tinggi dan kemampuan analisis.
    </p>

    <h2>Mata Pelajaran Pendukung:</h2>
    <td>
        <tr>Biologi</tr>
        <tr>Kimia</tr>
        <tr>Fisika</tr>
    </td>
    

    <h2>Indikator Kesesuaian:</h2>
    <td>
        <tr>Biologi >=80</tr>
        <tr>Kimia >=80</tr>
        <tr>Fisika >=75</tr>
    </td>

    <h2>Rekomendasi Jurusan:</h2>
    <p>Kedokteran, Farmasi, Bioteknologi, Ilmu Gizi</p>

    <h2>Prospek Karier:</h2>
    <p>Dokter, Peneliti, Analis Laboratorium</p>

    <a href="beranda.php" class="btn">Kembali</a>

</div>
</body>
</html>