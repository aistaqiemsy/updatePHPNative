<?php
    include_once"koneksi.php";
    $id = $_GET['kode'];

    $query = mysqli_query($koneksi, "select * from tb_data where id=$id");
    while($data = mysqli_fetch_array($query)) {
        ?>

        <form action="prosesUpload.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ID</td><td><input type="text" name="txId" value="<?php echo $data['id']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td><td><input type="text" name="txNama" value="<?php echo $data['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td><td><input type="text" name="txAlamat" value="<?php echo $data['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td></td><td><input type="file" name="gambar[]"></td>
                </tr>
                <tr>
                    <td></td><td><input type="submit" name="btPerbarui" value="Perbarui Data"></td>
                </tr>
            </table>
        </form>
        <?php
    }
?>

