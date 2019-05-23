<?php 
    include "koneksi.php";

    $sql = "CREATE DATABASE profile";

    if($koneksi->Query($sql) === TRUE){
        echo "Database gagal di buat ";
    } else {
        echo "Database gagal di buat";
    } 
?>