<?php

include 'koneksi.php';

/* AMBIL DATA SISWA */
$data = mysqli_query($konek, "SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Siswa</title>

<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- ICON -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f1f5f9;
    padding:40px;
}

/* CONTAINER */

.container{
    width:100%;
    max-width:1400px;
    margin:auto;
}

/* HEADER */

.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.header h1{
    font-size:40px;
    color:#0f172a;
}

/* BUTTON */

.btn{
    background:#2563eb;
    color:white;
    padding:14px 24px;
    border-radius:12px;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
}

.btn:hover{
    background:#1d4ed8;
}

/* TABLE */

.table-container{
    background:white;
    border-radius:25px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

table{
    width:100%;
    border-collapse:collapse;
}

thead{
    background:#2563eb;
    color:white;
}

thead th{
    padding:22px;
    text-align:left;
    font-size:18px;
}

tbody td{
    padding:22px;
    border-bottom:1px solid #e2e8f0;
    font-size:16px;
    color:#334155;
}

tbody tr:hover{
    background:#f8fafc;
}

/* BADGE */

.badge{
    padding:8px 14px;
    border-radius:30px;
    font-size:14px;
    font-weight:600;
    color:white;
}

.ipa{
    background:#22c55e;
}

.ips{
    background:#f97316;
}

/* AKSI */

.action{
    display:flex;
    gap:10px;
}

.edit{
    background:#0ea5e9;
}

.hapus{
    background:#ef4444;
}

.action a{
    color:white;
    padding:10px 14px;
    border-radius:10px;
    text-decoration:none;
}

/* RESPONSIVE */

@media(max-width:768px){

    body{
        padding:20px;
    }

    .header{
        flex-direction:column;
        gap:20px;
        align-items:flex-start;
    }

    .header h1{
        font-size:30px;
    }

    .table-container{
        overflow-x:auto;
    }

    table{
        min-width:1200px;
    }
}

</style>
</head>

<body>

<div class="container">

    <!-- HEADER -->

    <div class="header">

        <h1>Data Siswa</h1>

        <a href="index.php" class="btn-beranda">
            <i class="bi bi-house-door-fill"></i> Beranda
        </a>

        <a href="tambahsiswa.php" class="btn">

            <i class="bi bi-plus-circle"></i>
            Tambah Siswa

        </a>


    </div>

    <!-- TABLE -->

    <div class="table-container">

        <table>

            <thead>

                <tr>

                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>Peminatan</th>
                    <th>Minat</th>
                    <th>Rumpun</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

            <?php

            $no = 1;

            while($row = mysqli_fetch_assoc($data)){

            ?>

                <tr>

                    <td><?= $no++; ?></td>

                    <td><?= $row['NAMA']; ?></td>

                    <td><?= $row['NISN']; ?></td>

                    <td><?= $row['NILAI']; ?></td>

                    <td><?= $row['MINAT']; ?></td>

                    <td><?= $row['hasil_peminatan']; ?></td>

                    <td>

                        <span class="badge <?= strtolower($row['kelompok']); ?>">

                            <?= $row['kelompok']; ?>

                        </span>

                    </td>

                    <td><?= $row['minat']; ?></td>

                    <td><?= $row['rumpun']; ?></td>

                    <td><?= $row['jurusan']; ?></td>

                    <td>

                        <div class="action">

                            <a href="edit.php?id=<?= $row['id']; ?>" class="edit">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <a href="hapus.php?id=<?= $row['id']; ?>"
                            class="hapus"
                            onclick="return confirm('Yakin ingin menghapus data?')">

                                <i class="bi bi-trash-fill"></i>

                            </a>

                        </div>

                    </td>

                </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>