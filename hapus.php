<?php
include ("koneksi.php");

$id = $_GET['id_siswa'];


mysqli_query($koneksi,"DELETE FROM tb_jurusan where id_jurusan='$id'");
mysqli_query($koneksi,"DELETE FROM tb_spp where id_spp='$id'");
mysqli_query($koneksi,"DELETE FROM tb_siswa where id_siswa='$id'");

header("location:join-tabel.php");
?>