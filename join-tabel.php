<html>
<head>
 <title>Join Table</title>
</head>
<body>
<center>
    <table border="1">
      <tr>
      <td>No.</td>
      <td>Nama</td>
      <td>Kelas</td>
      <td>Jurusan</td>
   <td>Tahun</td>
   <td>Nominal</td>
  </tr>
  
  <?php
  include 'koneksi.php';

    $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa INNER JOIN tb_jurusan ON tb_siswa.id_jurusan =
    tb_jurusan.id_jurusan INNER JOIN tb_spp ON tb_siswa.id_spp= tb_spp.id_spp");

    $no = 1;
    foreach ($query as $row) :
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['kelas']; ?></td>
            <td><?= $row['nama_jurusan']; ?></td>
            <td><?= $row['tahun']; ?></td>
            <td><?= $row['nominal']; ?></td>
            <td>
            <a href="hapus.php?id_siswa=<?= $row['id_siswa']; ?>">| Hapus</a>
            <a href="edit.php?id_siswa=<?= $row['id_siswa']; ?>">Edit</a>
    </tr>
    <?php endforeach; ?>
    <a href="tambah.php"><input type="button" value="Tambah"/></a>
    </table>
    </center>
    </body>
    </html>