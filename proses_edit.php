<?php
include("koneksi.php");
if (isset($_POST['submit'])){
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];
 $nama_jurusan = $_POST['nama_jurusan'];
 $tahun = $_POST['tahun'];
 $nominal = $_POST['nominal'];

$sql = "UPDATE tb_siswa SET nama='$nama', kelas='$kelas' WHERE id_siswa=$id";
$query= mysqli_query($koneksi,$sql);

$sql = "UPDATE tb_jurusan SET nama_jurusan='$nama_jurusan' WHERE id_siswa=$id";
$query= mysqli_query($koneksi,$sql);

$sql = "UPDATE tb_spp SET tahun='$tahun', nominal='$nominal' WHERE id_siswa=$id";
$query= mysqli_query($koneksi,$sql);


if($query){
    header('Location:join-table.php');
}
else {
    die ('gagal mengedit');
}
}
?>