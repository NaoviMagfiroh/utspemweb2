<?php

    include 'connection.php';
    $tampil = pg_query("SELECT * FROM toko_hp");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
        
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script crossorigin='anonymous' src='https://kit.fontawesome.com/e188a75150.js'></script>

</head>
<body style="background-color:	#C0C0C0;">


<title>PEREKAMAN HP</title>

<nav class="navbar navbar-dark bg-secondary">
      <div class="container">
        <a class="navbar-brand" href="index.php">APLIKASI PEREKAMAN DATA HP</a>
        <a class="nav-item nav-link" style= "color : white" href="https://www.instagram.com/naovimagfiroh29/">Profile</a>
      </div>
    </nav>


    <div class="container">
        <div class="card mt-5"style="background-color:	#FFC0CB;">
            <div class="card-body shadow" style="margin-auto;">
                
            
        <br>

        
                
                <table class="table table-hover table-danger">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Merk HP</td>
                            <td>Tipe HP</td>
                            <td>Tahun Produksi</td>
                            <td>Aksi</td>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while($data = pg_fetch_array($tampil)):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['merk_hp'];?></td>
                            <td><?= $data['tipe_hp'];?></td>
                            <td><?= $data['tahun_produksi'];?></td>
                            
                            <td>


                            
                                <a href="edit.php?merk_hp=<?= $data['merk_hp']; ?>" class="btn btn-warning">Edit</a>
                                <a href="hapus.php?merk_hp=<?= $data['merk_hp']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="detail.php?merk_hp=<?= $data['merk_hp']; ?>" class="btn btn-warning">Detail</a>
                                
                            </td>
                        </tr>
                        <?php endwhile;?>
                    </tbody>
                </table>
                <br>
                <center><a href="tambah.php" class="btn btn-primary" >Tambah Data HP</a>
                <br>
            </div>
        </div>
    </div>
</body>
</html>