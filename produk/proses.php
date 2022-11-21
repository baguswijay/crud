<?php

    require('../connect.php');

    if(isset($_POST['Tambah'])){
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $merek = $_POST['merek'];
        $harga = $_POST['harga'];

        $result = mysqli_query($conn, "INSERT INTO produk (nama,jenis_id,merek_id, harga) VALUES ('$nama', '$jenis', '$merek', '$harga')");

        header('Location: index.php');
    }

    if (isset($_GET['Hapus'])) {
        $id = $_GET['id'];

        $result = mysqli_query($conn, "DELETE FROM produk WHERE id='$id'");

        header('Location: index.php');
    }

    if (isset($_POST['Ubah'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis_id'];
        $merek = $_POST['merek_id'];
        $harga = $_POST['harga'];

        $result = mysqli_query($conn, "UPDATE produk SET nama='$nama', jenis_id='$jenis', merek_id='$merek', harga='$harga' WHERE id ='$id'");

        header('Location: index.php');
        
    }
?>