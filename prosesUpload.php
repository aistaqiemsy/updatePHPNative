<?php
        include_once"koneksi.php";
        $tombolUpdate = $_POST['btPerbarui'];

            $id = $_POST['txId'];
            $nama   = $_POST['txNama'];
            $alamat = $_POST['txAlamat'];

            $folderGambar = "hasilUpload/";
            $gambar = str_replace(
                ' ',
                '-',
                strtolower(
                    $_FILES['gambar']['name'][0]
                )
            );

            if(!file_exists($folderGambar)) {
                @mkdir($folderGambar, 0777); 
            } else {
                move_uploaded_file(
                    $_FILES["gambar"]["tmp_name"][0], $folderGambar."/".$gambar
                );
            }

            $query  = mysqli_query(
                $koneksi, 
                "UPDATE tb_data SET nama = '$nama', alamat = '$alamat', gambar = '$gambar' WHERE id = '$id'");

                if ($query) { // jika query update berhasil, maka langsung pindah halaman tampil data
                    header("location: index.php");
                } else { // bila gagal
                    echo "Data gagal diperbarui :(";
                }
        
?>