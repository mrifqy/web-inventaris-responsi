<?php
    session_start();
    include "config.php";
    $kode_barang = $_GET['kode_barang'];
    $query = mysqli_query($connection, "DELETE FROM inventaris WHERE kode_barang='$kode_barang'") or die (mysqli_error($connection));

    

    if($query){
        header("location:inventaris.php");
        }
    else {
            echo "proses gagal";
        }
?>