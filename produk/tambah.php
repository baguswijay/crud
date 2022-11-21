<?php 
    require('../connect.php')
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
    Nama:<input type="text" name="nama" placeholder="Nama">
    <br> 
    <!-- <input type="text" name="merek" placeholder="MerekId"> -->
    <label for="merek_id">Merek:</label>
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
    <br>    

    <label for="jenis_id">Jenis:</label>
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
    <br>
    Harga:<input type="text" name="harga" placeholder="Harga">
    <br>
    <br>
    <button type="submit" name="Tambah" class="btn">
        Simpan
    </button>
</form>