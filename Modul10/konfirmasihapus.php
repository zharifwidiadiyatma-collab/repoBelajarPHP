<?php
include('crudmhs.php');
$nim = $_GET['nim'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow border-danger">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">Konfirmasi Hapus Data</h4>
                    </div>

                    <div class="card-body">
                        <p class="fs-5">
                            Apakah Anda yakin akan menghapus mahasiswa dengan NIM:
                            <strong><?php echo $nim; ?></strong> ?
                        </p>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="bacamhs.php" class="btn btn-secondary">
                                Batal
                            </a>

                            <a href="proseshapus.php?nim=<?php echo $nim; ?>" class="btn btn-danger">
                                Hapus
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</body>
</html>