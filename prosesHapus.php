<?php
    include"koneksi.php";
    $id = $_GET['kode'];

    $namaGambar = "";
    $ambilNama = mysqli_query(
        $koneksi, 
        "SELECT * FROM tb_data WHERE id = $id");
        while($nama = mysqli_fetch_array($ambilNama)) {
            $namaGambar = $nama['gambar'];
        }

        $file = "hasilUpload/".$namaGambar;
        if(file_exists($file)) {
            if (unlink($file)) {
                $sql = mysqli_query(
                    $koneksi,
                    "DELETE FROM tb_data WHERE id = $id");
                if($sql) {
                    header('location:index.php');
                } else {
                    echo "Penghapusan gagal!";
                }
            } else {
                echo "Hapus file gagal!";
            }
        }
?>