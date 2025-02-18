<center>
PEGAWAI MYSOURCE CODE
<hr>
<a href="dataBaru.php">Data Baru</a>
<table border="1">
    <tr>
        <td><b>ID</b></td>
        <td><b>Nama</b></td>
        <td><b>Alamat</b></td>
        <td><b>Gambar</b></b></td>
        <td>Perintah</td>
    </tr>
<?php
    include_once"koneksi.php";
    $query = mysqli_query($koneksi, "select * from tb_data");
    while($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td>
            <?php
                if($data["gambar"] == null) {
                    echo "Belum ada gambar";
                } else {
                    // echo $data['gambar'];
                    ?>
                    <!-- <img src="hasilUpload/dsc_0001.jpg" width="150"> -->
                     <img src="hasilUpload/<?php echo $data['gambar']; ?>" width="150" alt="">
                    <?php
                }
            ?>
            </td>
            <td>
                <a href="tampilUpdate.php?kode=<?php echo $data['id']; ?>">Perbarui</a> | 
                <a href="prosesHapus.php?kode=<?php echo $data['id']; ?>">Hapus</a></td>
        </tr>
        <?php
    }
?>
</table>
</center>