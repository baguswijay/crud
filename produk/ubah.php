<?php 
    require('../connect.php');

    $id = $_GET['id'];

    $data_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id'");

    while($data = mysqli_fetch_array($data_produk))
    {
        $nama = $data['nama'];
        $jenis = $data['jenis_id'];
        $merek = $data['merek_id'];
        $harga = $data['harga'];  
    } 
?>

<link rel="stylesheet" href="../style.css">

<div class="navbar">
    <a href="../merek/index.php">Merek</a>
    <a href="../jenis/index.php">Jenis</a>
    <a href="index.php">Produk</a>
</div>
<br>
<br>
<br>
<br>
<form action="proses.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" name="nama" value="<?php echo $nama; ?>">
    <select name="jenis_id" id="jenis_id">
        <?php 
            $query = "SELECT jenis.id, jenis.nama FROM jenis";

            $result = $conn->query($query);

            if (mysqli_num_rows($result)> 0) {
                while($row = mysqli_fetch_array($result)){
                    echo '
                        <option value="'.$row['id'].'">'.$row['nama'].'</option>
                    ';
                }
            }

        ?>
    </select>
    
    <select name="merek_id" id="merek_id">
        <?php 
            $query = "SELECT merek.id, merek.nama FROM merek";

            $result = $conn->query($query);

            if (mysqli_num_rows($result)> 0) {
                while($row = mysqli_fetch_array($result)){
                    echo '
                        <option value="'.$row['id'].'">'.$row['nama'].'</option>
                    ';
                }
            }

        ?>
    </select>
    <input type="text" name="harga" value="<?php echo $harga; ?>">
    <br>
    <br>
    <button type="submit" name="Ubah" class="btn">
        Simpan
    </button>
</form>