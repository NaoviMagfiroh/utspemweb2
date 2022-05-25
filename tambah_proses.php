<?php
    include 'connection.php';

    $merk_hp = $_POST['merk_hp'];
    $tipe_hp = $_POST['tipe_hp'];
    $tahun_produksi= $_POST['tahun_produksi'];

    $query_tambah = "INSERT INTO toko_hp (merk_hp,tipe_hp,tahun_produksi) VALUES ('$merk_hp','$tipe_hp','$tahun_produksi')";
    $tambah = pg_query($connection,$query_tambah);

    if($tambah){
        header("location: index.php");
    }else{
        header("location: tambah.php");
    }

?>