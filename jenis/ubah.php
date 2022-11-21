<?php 
    require('../connect.php');

    $id = $_GET['id'];

    $data_jenis = mysqli_query($conn, "SELECT * FROM jenis WHERE id= '$id'");

    while($data = mysqli_fetch_array($data_jenis))
    {
        $nama = $data['nama']; 
    }
?>

<link rel="stylesheet" href="../style.css">

<div class="navbar">
    <a href="../merek/index.php">Merek</a>
    <a href="index.php">Jenis</a>
    <a href="../produk/index.php">Produk</a>
</div>
<br>
<br>
<br>
<br>
<form action="proses.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" name="nama" value="<?php echo $nama; ?>">
    <button type="submit" name="Ubah" class="btn">
        Simpan
    </button>

</form>
