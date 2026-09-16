<?php
include('crudmhs.php');
$keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Daftar Mahasiswa</h2>

        <div class="card shadow">
            <div class="card-body">
                <div class="card-body">
                    <form action="" method="post" class="row g-2 mb-3">
                        <div class="col-md-8">
                            <input type="text"
                                name="keyword"
                                class="form-control"
                                placeholder="Cari berdasarkan NIM..."
                                value="<?php echo $keyword; ?>">
                        </div>
                        <div class="col-md-auto">
                            <input type="submit" value="Cari" class="btn btn-primary">
                        </div>

                        <div class="col-md-auto">
                            <a href="bacamhs.php" class="btn btn-secondary">
                                Tampilkan Semua
                            </a>
                        </div>
                    </form>
                </div>
                <div class="text-start mt-3">
                    <a href="tambahmhs.php"><button class="btn btn-success">Tambah Data Mahasiswa</button></a>
                </div><br>
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-primary text-center table-group-item">
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Proses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if ($keyword != "") {
                                $data = cariMhs($keyword);
                            } else {
                                $data = bacaSemuaMhs();
                            }

                            foreach($data as $mhs){
                                $nim = $mhs['nim'];
                                $nama = $mhs['nama'];
                                $kelamin = $mhs['kelamin'];
                                $jurusan = $mhs['jurusan'];
                                echo "
                                <tr>
                                    <td>$nim</td>
                                    <td>$nama</td>
                                    <td>$kelamin</td>
                                    <td>$jurusan</td>
                                    <td>
                                        <a href='konfirmasihapus.php?nim=$nim'><button class='btn btn-danger btn-sm'>Hapus</button></a>
                                        |
                                        <a href='konfirmasiubah.php?nim=$nim'><button class='btn btn-warning btn-sm'>Ubah</button></a>
                                    </td>
                                </tr>
                                ";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>