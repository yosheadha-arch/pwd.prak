# datasiswa.php

```php
<?php

include 'koneksi.php';

$query = mysqli_query($konek,

"SELECT * FROM siswa ORDER BY id DESC"

);

?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Siswa</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
    background:#eef2f7;
    padding:40px;
}

.title{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.title h1{
    font-size:45px;
    color:#0f172a;
}

.btn{
    text-decoration:none;
    background:#2563eb;
    color:white;
    padding:14px 25px;
    border-radius:15px;
    font-weight:600;
    transition:0.3s;
}

.btn:hover{
    background:#1d4ed8;
}

.table-box{
    background:white;
    border-radius:25px;
    overflow:auto;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

table{
    width:100%;
    border-collapse:collapse;
    min-width:1800px;
}

thead{
    background:#2563eb;
    color:white;
}

thead th{
    padding:22px;
    text-align:left;
    font-size:16px;
}

tbody td{
    padding:18px 22px;
    border-bottom:1px solid #e2e8f0;
    font-size:15px;
    color:#334155;
}

tbody tr:hover{
    background:#f8fafc;
}

.aksi{
    display:flex;
    gap:10px;
}

.edit{
    background:#f59e0b;
    color:white;
    padding:8px 15px;
    border-radius:10px;
    text-decoration:none;
}

.hapus{
    background:#ef4444;
    color:white;
    padding:8px 15px;
    border-radius:10px;
    text-decoration:none;
}

.back{
    display:inline-block;
    margin-bottom:20px;
    text-decoration:none;
    color:#2563eb;
    font-weight:600;
}

</style>

</head>
<body>

<a href="index.php" class="back">
    <i class="bi bi-arrow-left-circle-fill"></i>
    Kembali ke Dashboard
</a>

<div class="title">

    <h1>Data Siswa</h1>

    <a href="tambah.php" class="btn">
        <i class="bi bi-plus-circle-fill"></i>
        Tambah Siswa
    </a>

</div>

<div class="table-box">

<table>

<thead>
<tr>

<th>No</th>
<th>Nama</th>
<th>NISN</th>
<th>Kelas</th>
<th>Jenis Kelamin</th>
<th>Hasil Peminatan</th>

<th>MTK S1</th>
<th>MTK S2</th>

<th>INF S1</th>
<th>INF S2</th>

<th>BING S1</th>
<th>BING S2</th>

<th>BIO S1</th>
<th>BIO S2</th>

<th>KIM S1</th>
<th>KIM S2</th>

<th>FIS S1</th>
<th>FIS S2</th>

<th>EKO S1</th>
<th>EKO S2</th>

<th>GEO S1</th>
<th>GEO S2</th>

<th>SOS S1</th>
<th>SOS S2</th>

<th>BINDO S1</th>
<th>BINDO S2</th>

<th>Aksi</th>

</tr>
</thead>

<tbody>

<?php

$no = 1;

while($data = mysqli_fetch_array($query)){

?>

<tr>

<td><?= $no++; ?></td>
<td><?= $data['nama']; ?></td>
<td><?= $data['nisn']; ?></td>
<td><?= $data['kelas']; ?></td>
<td><?= $data['jenis_kelamin']; ?></td>
<td><?= $data['hasil_peminatan']; ?></td>

<td><?= $data['matematika_sem1']; ?></td>
<td><?= $data['matematika_sem2']; ?></td>

<td><?= $data['informatika_sem1']; ?></td>
<td><?= $data['informatika_sem2']; ?></td>

<td><?= $data['binggris_sem1']; ?></td>
<td><?= $data['binggris_sem2']; ?></td>

<td><?= $data['biologi_sem1']; ?></td>
<td><?= $data['biologi_sem2']; ?></td>

<td><?= $data['kimia_sem1']; ?></td>
<td><?= $data['kimia_sem2']; ?></td>

<td><?= $data['fisika_sem1']; ?></td>
<td><?= $data['fisika_sem2']; ?></td>

<td><?= $data['ekonomi_sem1']; ?></td>
<td><?= $data['ekonomi_sem2']; ?></td>

<td><?= $data['geografi_sem1']; ?></td>
<td><?= $data['geografi_sem2']; ?></td>

<td><?= $data['sosio_sem1']; ?></td>
<td><?= $data['sosio_sem2']; ?></td>

<td><?= $data['bindo_sem1']; ?></td>
<td><?= $data['bindo_sem2']; ?></td>

<td>

<div class="aksi">

<a href="edit.php?id=<?= $data['id']; ?>" class="edit">
    Edit
</a>

<a href="hapus.php?id=<?= $data['id']; ?>"
class="hapus"
onclick="return confirm('Yakin ingin menghapus data?')">
    Hapus
</a>

</div>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</body>
</html>
```
