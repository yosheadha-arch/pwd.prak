<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];

$data = mysqli_query($konek, "SELECT * FROM siswa WHERE id='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

    $nama =$_POST['nama'];
    $matematika = $_POST['matematika'];
    $ipa = $_POST['ipa'];
    $ips = $_POST['ips'];
    $komputer = $_POST['komputer'];

    if($ipa > $ips && $ipa > $komputer){
        $hasil = "IPA";
    }
    elseif($ips > $ipa && $ips > $komputer){
        $hasil = "IPS";
    }else{
        $hasil = "komputer";
    }

    
}
?>