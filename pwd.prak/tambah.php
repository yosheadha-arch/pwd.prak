<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah Data Siswa</title>

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
    url('bg.jpg');

    background-size:cover;
    background-position:center;

    display:flex;
    justify-content:center;
    align-items:center;

    padding:40px;
}

/* CARD */

.container{

    width:100%;
    max-width:950px;

    background:rgba(255,255,255,0.96);

    backdrop-filter:blur(10px);

    border-radius:30px;

    padding:45px;

    box-shadow:0 15px 40px rgba(0,0,0,0.25);
}

/* HEADER */

.header{
    display:flex;
    align-items:center;
    gap:18px;

    margin-bottom:35px;
}

.header i{
    font-size:55px;
    color:#2563eb;
}

.header h1{
    font-size:36px;
    color:#0f172a;
}

/* FORM */

.form-group{
    margin-bottom:25px;
}

.form-group label{

    display:block;

    margin-bottom:12px;

    font-size:18px;
    font-weight:600;

    color:#0f172a;
}

/* INPUT */

.form-control{

    width:100%;

    padding:18px 22px;

    border:2px solid #e2e8f0;

    border-radius:16px;

    font-size:16px;

    outline:none;

    transition:0.3s;

    background:#f8fafc;
}

.form-control:focus{

    border-color:#2563eb;

    background:white;

    box-shadow:0 0 0 5px rgba(37,99,235,0.15);
}

/* GRID */

.grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
}

/* BUTTON */

.btn{

    width:100%;

    margin-top:15px;

    border:none;

    padding:18px;

    background:#2563eb;

    color:white;

    border-radius:18px;

    font-size:18px;
    font-weight:600;

    cursor:pointer;

    transition:0.3s;
}

.btn:hover{

    background:#1d4ed8;

    transform:translateY(-3px);

    box-shadow:0 10px 20px rgba(37,99,235,0.3);
}

/* BACK BUTTON */

.back{

    display:inline-flex;
    align-items:center;
    gap:10px;

    text-decoration:none;

    color:#475569;

    margin-bottom:30px;

    font-weight:500;
}

.back:hover{
    color:#2563eb;
}

/* RESPONSIVE */

@media(max-width:768px){

    .container{
        padding:30px 20px;
    }

    .grid{
        grid-template-columns:1fr;
    }

    .header{
        flex-direction:column;
        text-align:center;
    }

    .header h1{
        font-size:28px;
    }
}

</style>
</head>

<body>

<div class="container">

    <!-- BACK -->

    <a href="index.php" class="back">

        <i class="bi bi-arrow-left-circle-fill"></i>

        Kembali ke Dashboard

    </a>

    <!-- HEADER -->

    <div class="header">

        <i class="bi bi-person-plus-fill"></i>

        <h1>Tambah Data Siswa</h1>

    </div>

    <!-- FORM -->

    <form action="inputnilai.php" method="POST">

        <div class="grid">

            <!-- NAMA -->

            <div class="form-group">

                <label>Nama Lengkap</label>

                <input type="text"
                name="nama"
                class="form-control"
                placeholder="Masukkan nama siswa"
                required>

            </div>

            <!-- NIS -->

            <div class="form-group">

                <label>NISN / NIS</label>

                <input type="text"
                name="nis"
                class="form-control"
                placeholder="Masukkan NISN"
                required>

            </div>

            <!-- KELAS -->

            <div class="form-group">

                <label>Kelas</label>

                <input type="text"
                name="kelas"
                class="form-control"
                placeholder="Contoh: X IPA 1"
                required>

            </div>

            <!-- JK -->

            <div class="form-group">

                <label>Jenis Kelamin</label>

                <select name="jk" class="form-control" required>

                    <option value="">-- Pilih --</option>

                    <option>Laki-laki</option>

                    <option>Perempuan</option>

                </select>

            </div>

            <!-- PEMINATAN -->

            <div class="form-group">

                <label>Pilihan Kelompok / Minat</label>

                <select name="kelompok"
                class="form-control"
                required>

                    <option value="">-- Pilih Kelompok --</option>

                    <option>IPA</option>
                    <option>IPS</option>
                    <option>Komputer</option>
                    <option>Biologi</option>
                    <option>Fisika</option>
                    <option>Matematika</option>

                </select>

            </div>

            <!-- MINAT -->

            <div class="form-group">

                <label>Minat Tambahan</label>

                <input type="text"
                name="minat"
                class="form-control"
                placeholder="Contoh: Informatika">

            </div>

            <!-- RUMPUN -->

            <div class="form-group">

                <label>Rumpun Minat</label>

                <input type="text"
                name="rumpun"
                class="form-control"
                placeholder="Contoh: Sains & Teknologi">

            </div>

            <!-- JURUSAN -->

            <div class="form-group">

                <label>Jurusan Impian</label>

                <input type="text"
                name="jurusan"
                class="form-control"
                placeholder="Contoh: Teknik Informatika">

            </div>

        </div>

        <!-- BUTTON -->

        <button type="submit" class="btn">

            <i class="bi bi-graph-up-arrow"></i>
             <form action="inputnilai.php" method="POST">
            Proses Analisis
        </button>

    </form>

</div>

</body>
</html>