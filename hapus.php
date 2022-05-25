<?php
include 'connection.php';

    $query_hapus = "DELETE FROM toko_hp WHERE merk_hp = '$_GET[merk_hp]'";
    $hapus = pg_query($connection, $query_hapus);

    if($hapus){
        header("location:index.php");
    }else{
        header("location:index.php");
    }
    
?>