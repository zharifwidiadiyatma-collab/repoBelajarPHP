<?php
    include('crudmhs.php');

    $nim = "260052209";
    $nama = "Josua";
    $kelamin = "L";
    $jurusan = "SI";
    $hasil = ubahMhs($nim, $nama, $kelamin, $jurusan);
    if ($hasil == true) {
        echo "Data berhasil diubah";
    } else {
        echo "Data gagal diubah";
    }
?>