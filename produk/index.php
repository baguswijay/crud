<?php 
    require('../connect.php');

    $data_produk = mysqli_query($conn, "SELECT produk.id, produk.nama, merek.nama as merek, jenis.nama as jenis, produk.harga
    FROM ((produk
    INNER JOIN merek ON merek.id = produk.merek_id)
    INNER JOIN jenis ON jenis.id = produk.jenis_id);");
?>

<link rel="stylesheet" href="../style.css" type="text/css">

<div class="navbar">
    <a href="../merek/index.php">Merek</a>
    <a href="../jenis/index.php">Jenis</a>
    <a href="#">Produk</a>
</div>
<br>
<br>
<br>
<table border="1" class="table" cellpadding="10">
    <tr bgcolor="pink">
        <td>No</td>
        <td>Nama</td>
        <td>Jenis</td>
        <td>Merek</td>
        <td>Harga</td>
        <td>Aksi</td>
    </tr>

    <?php 
        $i =1;
        while ($data = mysqli_fetch_array($data_produk)) {
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['jenis'] ?></td>
        <td><?php echo $data['merek'] ?></td>
        <td><?php echo $data['harga'] ?></td>
        <td>
            <a class="button" href="<?php echo "../produk/ubah.php?id=".$data['id']; ?>">Ubah</a>
            <a class="button" href="<?php echo "../produk/proses.php?Hapus&id=".$data['id']; ?>">Hapus</a>
        </td>
    </tr>

    <?php
        $i++; 
    }
    ?>
</table>
<br>
<br>
<br>
<div class="button-center">
    <a class="button" href="tambah.php">Tambah</a>
</div>