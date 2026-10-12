<?php
    $koneksi = mysqli_connect("localhost", "root", "", "smk_mart");
    if (!$koneksi) {
        die("Koneksi database gagal:".mysqli_connect_error());
    }
?>