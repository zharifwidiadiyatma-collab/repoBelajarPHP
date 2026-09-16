<?php
include('crudmhs.php');
$keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cari Mahasiswa</title>
</head>
<body>

    <h2>Pencarian Data Mahasiswa</h2>

    <form action="" method="post">
        Cari NIM:
        <input type="text" name="keyword" value="<?php echo $keyword; ?>">
        <input type="submit" value="Cari">
    </form>

    <hr>

    <?php
    if ($keyword != "") {
        $data = cariMhs($keyword);

        echo "<h3>Hasil Pencarian</h3>";

        if ($data != null) {
            echo "
            <table border='1'>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelamin</th>
                    <th>Jurusan</th>
                </tr>";

            foreach ($data as $mhs) {
                echo "
                <tr>
                    <td>{$mhs['nim']}</td>
                    <td>{$mhs['nama']}</td>
                    <td>{$mhs['kelamin']}</td>
                    <td>{$mhs['jurusan']}</td>
                </tr>";
            }

            echo "</table>";
        } else {
            echo "Data tidak ditemukan.";
        }
    } else {
        echo "<h3>Daftar Seluruh Mahasiswa</h3>";

        $data = bacaSemuaMhs();

        echo "
        <table border='1'>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kelamin</th>
                <th>Jurusan</th>
            </tr>";

        foreach ($data as $mhs) {
            echo "
            <tr>
                <td>{$mhs['nim']}</td>
                <td>{$mhs['nama']}</td>
                <td>{$mhs['kelamin']}</td>
                <td>{$mhs['jurusan']}</td>
            </tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>