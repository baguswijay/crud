<?php
    require('../connect.php');

    $data_merek = mysqli_query($conn, "SELECT * FROM merek");

?>

<link rel="stylesheet" type="text/css" href="../style.css">

<div class="navbar">
    <a href="#">Merek</a>
    <a href="../jenis/index.php">Jenis</a>
    <a href="../produk/index.php">Produk</a>
</div>
<br>
<br>
<br>
<div class="container">

    <div>
        <table border="1" class="table" cellpadding="10">
            <tr bgcolor="pink">
                <td>NO</td>
                <td>Nama</td>
                <td>Aksi</td>
            </tr>

            <?php
                $i = 1;
                while ($data = mysqli_fetch_array($data_merek)){
            ?>
            
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td>
                    <a class="button" href="<?php echo "../merek/ubah.php?id=".$data['id']; ?>">Ubah</a>
                    <a class="button" href="<?php echo "../merek/proses.php?Hapus&id=".$data['id']; ?>">Hapus</a>
                </td>
            </tr>

            <?php
                $i++;    
            }
            ?>

        </table>
          
    </div>
    <div class="button-center">
        <a class="button" href="tambah.php">Tambah</a>
    </div>
</div>

