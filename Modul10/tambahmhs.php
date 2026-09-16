<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">

                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Form Tambah Mahasiswa</h4>
                    </div>

                    <div class="card-body">
                        <form method="post" action="prosestambah.php">

                            <div class="mb-3">
                                <label class="form-label">NIM</label>
                                <input type="text" name="nim" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kelamin" value="L" id="laki">
                                    <label class="form-check-label" for="laki">
                                        Laki-laki
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kelamin" value="P" id="perempuan">
                                    <label class="form-check-label" for="perempuan">
                                        Perempuan
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>

                                <div class="form-check">
                                    <input type="radio" name="jurusan" value="MI"> MI
                                    <input type="radio" name="jurusan" value="TK"> TK
                                    <input type="radio" name="jurusan" value="KA"> KA
                                    <input type="radio" name="jurusan" value="TI"> TI
                                    <input type="radio" name="jurusan" value="SI"> SI
                                </div>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <a href="bacamhs.php" class="btn btn-secondary">
                                    Batal
                                </a>

                                <input type="submit" value="Tambah" class="btn btn-success">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>