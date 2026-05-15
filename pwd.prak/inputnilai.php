<?php

include 'koneksi.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['proses'])){

    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $kelas = $_POST['kelas'];
    $jk = $_POST['jk'];
    $kelompok = $_POST['kelompok'];

    $mtk1 = $_POST['mtk1'];
    $mtk2 = $_POST['mtk2'];

    $inf1 = $_POST['inf1'];
    $inf2 = $_POST['inf2'];

    $eng1 = $_POST['eng1'];
    $eng2 = $_POST['eng2'];

    $bio1 = $_POST['bio1'];
    $bio2 = $_POST['bio2'];

    $kim1 = $_POST['kim1'];
    $kim2 = $_POST['kim2'];

    $fis1 = $_POST['fis1'];
    $fis2 = $_POST['fis2'];

    $eko1 = $_POST['eko1'];
    $eko2 = $_POST['eko2'];

    $geo1 = $_POST['geo1'];
    $geo2 = $_POST['geo2'];

    $sos1 = $_POST['sos1'];
    $sos2 = $_POST['sos2'];

    $indo1 = $_POST['indo1'];
    $indo2 = $_POST['indo2'];

    $query = mysqli_query($konek,

    "INSERT INTO siswa
    (
        nama,
        nisn,
        kelas,
        jenis_kelamin,
        hasil_peminatan,

        matematika_sem1,
        matematika_sem2,

        informatika_sem1,
        informatika_sem2,

        binggris_sem1,
        binggris_sem2,

        biologi_sem1,
        biologi_sem2,

        kimia_sem1,
        kimia_sem2,

        fisika_sem1,
        fisika_sem2,

        ekonomi_sem1,
        ekonomi_sem2,

        geografi_sem1,
        geografi_sem2,

        sosiologi_sem1,
        sosiologi_sem2,

        bindo_sem1,
        bindo_sem2
    )

    VALUES
    (
        '$nama',
        '$nis',
        '$kelas',
        '$jk',
        '$kelompok',

        '$mtk1',
        '$mtk2',

        '$inf1',
        '$inf2',

        '$eng1',
        '$eng2',

        '$bio1',
        '$bio2',

        '$kim1',
        '$kim2',

        '$fis1',
        '$fis2',

        '$eko1',
        '$eko2',

        '$geo1',
        '$geo2',

        '$sos1',
        '$sos2',

        '$indo1',
        '$indo2'
    )"

    );

    if($query){

        echo "
        <script>
            alert('Data berhasil disimpan');
            window.location='hasil.php';
        </script>
        ";

    }else{

        echo "
        <script>
            alert('Data gagal disimpan');
        </script>
        ";

    }

}

?>

?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Input Nilai Siswa</title>

<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- ICON -->
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
    linear-gradient(rgba(15,23,42,0.75),
    rgba(37,99,235,0.65)),
    url('gambar1.jpg');

    background-size:cover;
    background-position:center;

    display:flex;
    justify-content:center;
    align-items:center;

    padding:40px;
}

/* CONTAINER */

.container{

    width:100%;
    max-width:1400px;

    background:rgba(255,255,255,0.95);

    backdrop-filter:blur(8px);

    border-radius:30px;

    padding:45px;

    box-shadow:0 15px 40px rgba(0,0,0,0.25);
}

/* HEADER */

.header{

    text-align:center;

    margin-bottom:40px;
}

.header h2{

    font-size:42px;

    color:#0f172a;

    margin-bottom:10px;
}

.header p{

    color:#64748b;

    font-size:17px;
}

/* BUTTON SEMESTER */

.semester-btn{

    display:flex;

    justify-content:center;

    gap:20px;

    margin-bottom:40px;
}

.semester-btn button{

    border:none;

    padding:14px 30px;

    border-radius:14px;

    font-size:17px;

    font-weight:500;

    cursor:pointer;

    transition:0.3s;

    background:#e2e8f0;
}

.semester-btn button:hover{

    transform:translateY(-2px);
}

.semester-btn .active{

    background:#3498db;

    color:white;

    box-shadow:0 10px 20px rgba(52,152,219,0.25);
}

/* GRID */

.nilai-grid{

    display:grid;

    grid-template-columns:repeat(5,1fr);

    gap:25px;
}

/* INPUT GROUP */

.input-group{

    display:flex;

    flex-direction:column;
}

.input-group label{

    margin-bottom:12px;

    font-size:17px;

    font-weight:600;

    color:#0f172a;
}

/* INPUT */

.input-group input{

    width:100%;

    padding:16px 18px;

    border-radius:18px;

    border:2px solid #dbe2ea;

    background:#f8fafc;

    outline:none;

    font-size:16px;

    transition:0.3s;
}

.input-group input:focus{

    border-color:#3498db;

    background:white;

    box-shadow:0 0 0 5px rgba(52,152,219,0.15);
}

/* BUTTON SUBMIT */

.button-area{

    display:flex;

    justify-content:center;

    margin-top:45px;
}

.submit-btn{

    width:320px;

    padding:18px;

    border:none;

    background:#3498db;

    color:white;

    border-radius:18px;

    cursor:pointer;

    font-size:20px;

    font-weight:600;

    transition:0.3s;
}

.submit-btn:hover{

    background:#2980b9;

    transform:translateY(-3px);

    box-shadow:0 15px 25px rgba(52,152,219,0.25);
}

/* RESPONSIVE */

@media(max-width:1200px){

    .nilai-grid{

        grid-template-columns:repeat(3,1fr);
    }
}

@media(max-width:768px){

    .container{

        padding:30px 20px;
    }

    .header h2{

        font-size:28px;
    }

    .nilai-grid{

        grid-template-columns:1fr;
    }

    .semester-btn{

        flex-direction:column;
        align-items:center;
    }

    .semester-btn button{

        width:220px;
    }

    .submit-btn{

        width:100%;
    }
}

</style>
</head>

<body>

<div class="container">

    <!-- HEADER -->

    <div class="header">

        <h2>INPUT NILAI PENGETAHUAN</h2>

        <p>
            Silakan masukkan nilai siswa sesuai semester yang dipilih
        </p>

    </div>

    <!-- BUTTON SEMESTER -->

    <div class="semester-btn">

        <button type="button"
        id="btn1"
        class="active"
        onclick="gantiSemester(1)">

            <i class="bi bi-journal-check"></i>
            Semester 1

        </button>

        <button type="button"
        id="btn2"
        onclick="gantiSemester(2)">

            <i class="bi bi-journal-text"></i>
            Semester 2

        </button>

    </div>

    <!-- FORM -->

    <form method="POST" action="hasil.php">

    <!-- DATA DARI TAMBAH.PHP -->

<input type="hidden"
name="nama"
value="<?php echo $_POST['nama']; ?>">

<input type="hidden"
name="nis"
value="<?php echo $_POST['nis']; ?>">

<input type="hidden"
name="kelas"
value="<?php echo $_POST['kelas']; ?>">

<input type="hidden"
name="jk"
value="<?php echo $_POST['jk']; ?>">

<input type="hidden"
name="kelompok"
value="<?php echo $_POST['kelompok']; ?>">

    <!-- SEMESTER 1 -->

    <div id="smt1" class="nilai-grid">

        <div class="input-group">
            <label>Matematika</label>
            <input type="number" name="mtk1" min="0" max="100" required>
        </div>

        <div class="input-group">
            <label>Informatika</label>
            <input type="number" name="inf1" min="0" max="100" required>
        </div>

        <div class="input-group">
            <label>Bahasa Inggris</label>
            <input type="number" name="eng1" min="0" max="100" required>
        </div>

        <div class="input-group">
            <label>Biologi</label>
            <input type="number" name="bio1" min="0" max="100" required>
        </div>

        <div class="input-group">
            <label>Kimia</label>
            <input type="number" name="kim1" min="0" max="100" required>
        </div>

        <div class="input-group">
            <label>Fisika</label>
            <input type="number" name="fis1" min="0" max="100" required>
        </div>

        <div class="input-group">
            <label>Ekonomi</label>
            <input type="number" name="eko1" min="0" max="100" required>
        </div>

        <div class="input-group">
            <label>Geografi</label>
            <input type="number" name="geo1" min="0" max="100" required>
        </div>

        <div class="input-group">
            <label>Sosiologi</label>
            <input type="number" name="sos1" min="0" max="100" required>
        </div>

        <div class="input-group">
            <label>Bahasa Indonesia</label>
            <input type="number" name="indo1" min="0" max="100" required>
        </div>

    </div>

    <!-- SEMESTER 2 -->

    <div id="smt2"
    class="nilai-grid"
    style="display:none;">

        <div class="input-group">
            <label>Matematika</label>
            <input type="number" name="mtk2" min="0" max="100">
        </div>

        <div class="input-group">
            <label>Informatika</label>
            <input type="number" name="inf2" min="0" max="100">
        </div>

        <div class="input-group">
            <label>Bahasa Inggris</label>
            <input type="number" name="eng2" min="0" max="100">
        </div>

        <div class="input-group">
            <label>Biologi</label>
            <input type="number" name="bio2" min="0" max="100">
        </div>

        <div class="input-group">
            <label>Kimia</label>
            <input type="number" name="kim2" min="0" max="100">
        </div>

        <div class="input-group">
            <label>Fisika</label>
            <input type="number" name="fis2" min="0" max="100">
        </div>

        <div class="input-group">
            <label>Ekonomi</label>
            <input type="number" name="eko2" min="0" max="100">
        </div>

        <div class="input-group">
            <label>Geografi</label>
            <input type="number" name="geo2" min="0" max="100">
        </div>

        <div class="input-group">
            <label>Sosiologi</label>
            <input type="number" name="sos2" min="0" max="100">
        </div>

        <div class="input-group">
            <label>Bahasa Indonesia</label>
            <input type="number" name="indo2" min="0" max="100">
        </div>

    </div>

    <!-- BUTTON -->

    <div class="button-area">

        <button type="submit" class="submit-btn">

            <i class="bi bi-bar-chart-fill"></i>
            Proses Hasil

        </button>

    </div>

    </form>

</div>

<script>

function gantiSemester(smt){

    document.getElementById("btn1").classList.remove("active");
    document.getElementById("btn2").classList.remove("active");

    if(smt == 1){

        document.getElementById("btn1").classList.add("active");

        document.getElementById("smt1").style.display = "grid";
        document.getElementById("smt2").style.display = "none";

    }else{

        document.getElementById("btn2").classList.add("active");

        document.getElementById("smt1").style.display = "none";
        document.getElementById("smt2").style.display = "grid";
    }

    document.getElementById("semester").value = smt;
}

</script>

</body>
</html>