<?php
    session_start();
    require "../koneksi.php";

    $id = $_GET['id'];

    $berhasil = mysqli_query($conn, "DELETE FROM galeri WHERE id=$id");

    if($berhasil){
        header('Location: ../admin.php');
    }
?>