<?php
    include('crudmhs.php');
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $jurusan = $_POST['jurusan'];
    $hasil = ubahMhs($nim, $nama, $kelamin, $jurusan);
    if ($hasil == true) {
        header("Location: bacamhs.php");
        exit;
    } else {
        echo "
            <h3>Gagal mengubah data!</h3>
            <a href='bacamhs.php'>
                <button>Kembali</button>
            </a>
        ";
    }
?>