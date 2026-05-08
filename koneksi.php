<?php
$konek = mysqli_connect("localhost", "root", "", "pemetaan");

if (!$konek) {
    die("Maaf koneksi gagal: " . mysqli_connect_error());
}
?>