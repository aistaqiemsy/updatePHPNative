<?php
    include_once"koneksi.php";
    $id = $_GET['kode'];

    $query = mysqli_query($koneksi, "select * from tb_data where id=$id");
    while($data = mysqli_fetch_array($query)) {
        ?>

        <form action="#" method="post">
            <table>
            <tr>
                <td>Nama</td><td><input type="text" name="txNama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td><td><input type="text" name="txAlamat" value="<?php echo $data['alamat']; ?>"></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" name="btPerbarui" value="Perbarui Data"></td>
            </tr>
            </table>
        </form>
        <?php

        if(isset($_POST['btPerbarui'])) {
            $nama   = $_POST['txNama'];
            $alamat = $_POST['txAlamat'];
            $query  = mysqli_query(
                $koneksi, 
                "UPDATE tb_data SET nama = '$nama', alamat = '$alamat' WHERE id = '$id'");

                if ($query) { // jika query update berhasil, maka langsung pindah halaman tampil data
                    header("location: index.php");
                } else { // bila gagal
                    echo "Data gagal diperbarui :(";
                }
        }
    }
?>

