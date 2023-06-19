<html>
<head>
  <title>Pt.Panjang Tangan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="p-3 mb-2 bg-secondary bg-gradient">
  <h1 class="position-absolute top-0 start-50 translate-middle-x">List Pendaftar</h1>
  <a href="form_simpan.php" class="btn btn-dark">Tambah Data</a><br><br>
  <a href="unduh_pdf.php" class="btn btn-dark">Unduh Data</a><br><br>
  <table class="table table-dark table-striped">
  <tr>
    <th>Foto</th>
    <th>Nomor Pendaftaran</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Telepon</th>
    <th>Alamat</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM siswa");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
    echo "<td>".$data['nis']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."' class='btn btn-light'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."' class='btn btn-light'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>

</body>
</html>