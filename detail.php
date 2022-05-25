<?php
    include 'connection.php';
    $query = "SELECT * from toko_hp where merk_hp = '$_GET[merk_hp]'";
    $tampil = pg_query($connection,$query);
    while($data = pg_fetch_array($tampil)){
        $merk_hp = $data['merk_hp'];
        $tipe_hp = $data['tipe_hp'];
        $tahun_produksi = $data['tahun_produksi'];
  
    }
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
        <a class="nav-item nav-link" style= "color : white"  href="https://www.instagram.com/naovimagfiroh29/">Profile</a>
      </div>
    </nav>

<body style="background-color: #ffffd188;">
        <div class="container mt-5">
            <div class="card border-white shadow-sm p-3 mb-4" style="border-radius: 15px;">
                <div class="card-body"style="background-color:	#FFC0CB;">
                <h2 class="text-center">Detail Data</h2>
                    <h5 class="text-white text-hidden"> <?php echo $merk_hp; ?> </h5>
                    <h5>Merk HP :  <?php echo $merk_hp; ?> </h5>
                    <h5>Tipe HP : <?php echo $tipe_hp; ?> </h5>
                    <h5> Tahun Produksi: <?php echo $tahun_produksi; ?>  </h5>
                    <button type="button" class="btn btn-danger mt-3" onclick="history.back()">Kembali</button>
                    
                </div>
            </div>
        </div>                         
</body>
</html>