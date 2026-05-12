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
            
        }
    </style>
</head>
<body>
    
</body>
</html>