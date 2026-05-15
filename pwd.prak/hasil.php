<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$semester = $_POST['semester'] ?? 1;

function ambil($key){
    return isset($_POST[$key]) && $_POST[$key] !== '' ? (float)$_POST[$key] : 0;
}

if($semester == 1){
    $mtk = ambil('mtk1');
    $inf = ambil('inf1');
    $eng = ambil('eng1');
    $bio = ambil('bio1');
    $kim = ambil('kim1');
    $fis = ambil('fis1');
    $eko = ambil('eko1');
    $geo = ambil('geo1');
    $sos = ambil('sos1');
    $indo = ambil('indo1');
}else{
    $mtk = ambil('mtk2');
    $inf = ambil('inf2');
    $eng = ambil('eng2');
    $bio = ambil('bio2');
    $kim = ambil('kim2');
    $fis = ambil('fis2');
    $eko = ambil('eko2');
    $geo = ambil('geo2');
    $sos = ambil('sos2');
    $indo = ambil('indo2');
}

function rata($arr){
    $valid = array_filter($arr, fn($v) => $v > 0);
    return count($valid) > 0 ? array_sum ($valid) / count($valid) : 0;
}

$ipa = rata([$bio, $kim, $fis]);
$ips = rata([$eko, $geo, $sos]);
$komputer = rata([$mtk, $inf]);
$bahasa = rata([$indo, $eng]);

$ipa = round($ipa, 2);
$ips = round($ips, 2);
$komputer = round($komputer, 2);
$bahasa = round($bahasa, 2);

if($ipa >= $ips && $ipa >= $komputer){
    $jurusan = "IPA";
    $rekomendasi = "Kedokteran, Farmasi, Teknik";
}
elseif($ips >= $ipa && $ips >= $komputer){
    $jurusan = "IPS";
    $rekomendasi = "Manajemen, Hukum, Akuntansi";
}
else{
    $jurusan = "Komputer";
    $rekomendasi = "Informatika, Sistem Informasi";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <style>
        body {
            font-family: Poppins;
            background: url('kelas.jpeg') center/cover no-repeat;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .box{
            background: rgba(255,255,255,0.9);
            padding:40px;
            border-radius:15px;
            width:400px;
            text-align:center;
        }

        .rekom{
            margin-top:20px;
            padding:15px;
            background:#3498db;
            color:white;
            border-radius:10px;
        }

        .btn-kembali{
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 500;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .btn-kembali:hover{
            background: #2980b9;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Hasil Analisis</h2>

        <p>IPA: <?=number_format($ipa,1)?></p>
        <p>IPS: <?=number_format($ips,1)?></p>
        <p>Komputer: <?=number_format($komputer,1)?></p>
        <p>Bahasa: <?=number_format($bahasa,1)?></p>

        <div class="rekom">
            <b><?= $rekomendasi ?></b><br>
            <?= $jurusan ?>
        </div>

        <div style="margin-top:20px;">
            <a href="beranda.php" class="btn">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>