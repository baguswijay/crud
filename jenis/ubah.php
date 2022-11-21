<?php 
    require('../connect.php');

    $id = $_GET['id'];

    $data_jenis = mysqli_query($conn, "SELECT * FROM jenis WHERE id= '$id'");

    while($data = mysqli_fetch_array($data_jenis))
    {
        $nama = $data['nama']; 
    }
?>

<form action="proses.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" name="nama" value="<?php echo $nama; ?>">
    <button type="submit" name="Ubah">
        Simpan
    </button>

</form>
