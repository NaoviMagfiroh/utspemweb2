<?php
    include 'connection.php';
    $query = "SELECT * FROM toko_hp WHERE merk_hp = '$_GET[merk_hp]'";
    $statement = pg_query($connection,$query);
    while($data= pg_fetch_array($statement)){
        $merk_hp = $data['merk_hp'];
        $tipe_hp = $data['tipe_hp'];
        $tahun_produksi = $data['tahun_produksi'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body style="background-color:	#C0C0C0;">

<nav class="navbar navbar-dark bg-secondary">
      <div class="container">
        <a class="navbar-brand" href="index.php">APLIKASI PEREKAMAN DATA HP</a>
        <a class="nav-item nav-link" style= "color : white"  href="https://www.instagram.com/naovimagfiroh29/">Profile</a>
      </div>
    </nav>
    <br>
<div class="container">
    <div class="card shadow mt-3"style="background-color:	#FFC0CB;">
    <form method="post" action="edit_proses.php" >
        <div class="card-body" style="margin: auto;">
         <h3 class="text-center"><b>Edit Data</b></h3>
        <div class="form-group">
                
            </div>
            <div class="form-group">
                <label class="mt-2mb-2" for="merk_hp">MERK HP</label>
                <input type="text" class="form-control" name="merk_hp" id="merk_hp" value="<?php echo $merk_hp;?>"  required>
            </div>
            <br>
            <div class="form-group">
                <label class="mt-5-mb-5" for="tipe_hp">TIPE HP</label>
                <input type="text" class="form-control" name="tipe_hp" id="tipe_hp" placeholder="Masukkan Tipe HP"value ="<?php echo $tipe_hp; ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label for="prodi">Tahun Produksi</label>
                <select class="form-control" name="tahun_produksi" merk_hp="tahun_produksi"required>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <center><button type="button" class="btn btn-danger mt-3" onclick="history.back()">Batal</button>
            <input type="submit" name="submit" class="btn btn-primary mt-3" value="SIMPAN" onclick="return confirm('Apakah Anda yakin ?')">
            </div>
        </div>
        </form>
    </div>
       
    </div>
</body>
</html>