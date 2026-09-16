<?php
    include('crudmhs.php');
    $nim = $_GET['nim'];

    $sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";

    $data = bacaMhs($sql);
    $mhs = $data[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Ubah Data</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">

                <div class="card shadow">
                    <div class="card-header bg-warning">
                        <h4 class="mb-0">Konfirmasi Ubah Data Mahasiswa</h4>
                    </div>

                    <div class="card-body">
                        <form action="prosesubah.php" method="post">

                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" id="nim" name="nim"
                                    value="<?php echo $nim; ?>"
                                    class="form-control" readonly>
                            </div>

                            <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama"
                                   value="<?php echo $mhs['nama']; ?>"
                                   class="form-control"
                                   required>
                        </div>

                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label><br>

                                <input type="radio" id="laki" name="kelamin" <?php if($mhs['kelamin'] == "L") echo "checked"; ?> value="L" required>
                                <label for="laki">Laki-laki</label>

                                <input type="radio" id="perempuan" name="kelamin" value="P" class="ms-3" required>
                                <label for="perempuan">Perempuan</label>
                            </div>

                            <div class="mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-select" required>
                                    <option value="TI" <?php if($mhs['jurusan'] == "TI") echo "selected"; ?>>Teknik Informatika</option>
                                    <option value="SI" <?php if($mhs['jurusan'] == "SI") echo "selected"; ?>>Sistem Informasi</option>
                                    <option value="MI" <?php if($mhs['jurusan'] == "MI") echo "selected"; ?>>Manajemen Informatika</option>
                                    <option value="TK" <?php if($mhs['jurusan'] == "TK") echo "selected"; ?>>Teknik Komputer</option>
                                    <option value="KA" <?php if($mhs['jurusan'] == "KA") echo "selected"; ?>>Komputerisasi Akuntansi</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <a href="bacamhs.php" class="btn btn-secondary">
                                    Batal
                                </a>

                                <input type="submit" value="Ubah" class="btn btn-warning">
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

</body>
</html>