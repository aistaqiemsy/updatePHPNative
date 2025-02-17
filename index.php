<center>
PEGAWAI MYSOURCE CODE
<hr>
<table border="1">
    <tr>
        <td><b>ID</b></td>
        <td><b>Nama</b></td>
        <td><b>Alamat</b></td>
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
            <td><a href="tampilUpdate.php?kode=<?php echo $data['id']; ?>">Perbarui</a></td>
        </tr>
        <?php
    }
?>
</table>
</center>