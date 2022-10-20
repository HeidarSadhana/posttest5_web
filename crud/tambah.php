<?php
    session_start();
    require "../koneksi.php";
    
    $artis = $_POST['artis'];
    $judul = $_POST['judul'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];
    $email = $_POST['email'];
    
    $tambah = "INSERT INTO galeri VALUES('','$artis','$judul','$jenis','$email','$harga','$tanggal')";

    $result = mysqli_query($conn, $tambah);

    header('Location: ../admin.php');
    exit();
?>