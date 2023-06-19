<html>
<head>
  <title>Pendaftaran Karyawan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="p-3 mb-2 bg-secondary bg-gradient">
    <div class="container index position-absolute top-50 start-50 translate-middle">
        <h1>Tambah Data</h1>
        <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
        <table cellpadding="8">
        <tr class="mb-3">
            <td>Nomor Pendaftaran</td>
            <td><input type="text" name="nis" class="btn btn-light"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" class="btn btn-light"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" > Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" > Perempuan
            </td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td><input type="text" name="telp" class="btn btn-light"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" class="btn btn-light"></textarea></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto" class="btn btn-light"></td>
        </tr>
        </table>
        
        <input type="submit" value="Simpan" class="btn btn-dark">
        <a href="index.php"><input type="button" value="Batal" class="btn btn-dark"></a>
        </form>
    </div>
</body>
</html>
