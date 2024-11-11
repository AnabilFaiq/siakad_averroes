<?php

include '../../connection/connection.php';

$sql1 = "SELECT COUNT(*) as jumlah_guru FROM user WHERE role_id = 2";
$sql2 = "SELECT COUNT(*) as jumlah_siswa FROM user WHERE role_id = 3";
$sql3 = "SELECT COUNT(*) as jumlah_kelas FROM kelas";
$sql4 = "SELECT COUNT(*) as jumlah_mapel FROM mapel";

// eksekusi query

$guru = $conn->query($sql1);
$siswa = $conn->query($sql2);
$kelas = $conn->query($sql3);
$mapel = $conn->query($sql4);

// fetch data
$data_guru = $guru->fetch_assoc();
$data_siswa = $siswa->fetch_assoc();
$data_kelas = $kelas->fetch_assoc();
$data_mapel = $mapel->fetch_assoc();


?>