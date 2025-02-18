<?php
include_once"koneksi.php";
    $nama = $_GET['txNama'];
    $alamat = $_GET['txAlamat'];

    $query = "insert into tb_data( nama, alamat ) values ('$nama', '$alamat')";

    if(mysqli_query($koneksi, $query)) {
        echo "Data tersimpan...";
        header('location:index.php');
    } else {
        echo "Gagal gaes....";
    }

?>