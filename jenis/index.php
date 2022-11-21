<?php 
    require("../connect.php");

    $data_jenis = mysqli_query($conn, "SELECT * FROM jenis");
?>

<link rel="stylesheet" type="text/css" href="../style.css">

<div class="navbar">
    <a href="../merek/index.php">Merek</a>
    <a href="#">Jenis</a>
    <a href="../produk/index.php">Produk</a>
</div>
<br>
<br>
<br>
<table border="1" class="table" cellpadding="10">
    <tr bgcolor= "pink" width="100px">
        <td>NO</td>
        <td>Nama</td>
        <td>Aksi</td>
    </tr>

    <?php
        $i = 1;
        while ($data = mysqli_fetch_array($data_jenis)){
    ?>
    
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td>
            <a class="button" href="<?php echo "../jenis/ubah.php?id=".$data['id']; ?>">Ubah</a>
            <a class="button" href="<?php echo "../jenis/proses.php?Hapus&id=".$data['id']; ?>">Hapus</a>
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

