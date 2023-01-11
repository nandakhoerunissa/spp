<?php
include("koneksi.php");
if(isset($_POST['tambah_siswa'])){
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $nama_jurusan=$_POST['nama_jurusan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];
    
    $sql = "INSERT INTO tb_siswa(nama, kelas, nama_jurusan, tahun, nominal) VALUES ('$nama', '$kelas', '$nama_jurusan', '$tahun', '$nominal')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:join-tabel.php?status=sukses');
    }else{
        header('location:join-tabel.php?status=gagal');
    }
}
?>