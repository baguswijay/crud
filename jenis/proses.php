<?php
    require('../connect.php');

    if(isset($_POST['Tambah'])){
        $nama = $_POST['nama'];

        $result = mysqli_query($conn, "INSERT INTO jenis (nama) VALUES ('$nama')");

        header('Location: index.php');
    }

    if (isset($_GET['Hapus'])) {
        $id = $_GET['id'];

        $result = mysqli_query($conn, "DELETE FROM jenis WHERE id='$id'");

        header('Location: index.php');
    }

    if (isset($_POST['Ubah'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];

        $result = mysqli_query($conn, "UPDATE jenis SET nama='$nama' WHERE id='$id'");

        header('Location: index.php');
    }
?>