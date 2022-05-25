<?php

    include('connection.php');
        $merk_hp = $_POST['merk_hp'];
        $tipe_hp = $_POST['tipe_hp'];
        $tahun_produksi= $_POST['tahun_produksi']; 

        $query_edit = "UPDATE toko_hp SET merk_hp='$merk_hp', tipe_hp='$tipe_hp', tahun_produksi='$tahun_produksi' WHERE merk_hp= '$merk_hp' ";
        $edit = pg_query($connection,$query_edit);

        if($edit){
            header("location:index.php");
        }else{
            header("location:index.php?id=$kategori");
        }
?>