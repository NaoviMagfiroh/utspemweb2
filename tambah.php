<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah</title>
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
        <div class="card mt-3"style="background-color:	#FFC0CB;">
        <form method="post" action="tambah_proses.php" >
            <div class="card-body shadow" style="margin:auto;" >
                <h3 class="text-center"><b>Tambah Data</b></h3>
            <div class="form-group">
                <label for="merk_hp">Merk HP</label>
                <input type="text" class="form-control" id="merk_hp"  name="merk_hp" placeholder="Masukan Merk HP" required>
            </div>
            <br>
            <div class="form-group">
                <label for="tipe_hp">Tipe HP</label>
                <input type="text" class="form-control" id="tipe_hp" name="tipe_hp" placeholder="Masukan Tipe HP" required>
            </div>
            <br>
            <div class="form-group">
                <label for="tahun_produksi">Tahun Produksi</label>
                <select class="form-control" name="tahun_produksi" merk_hp="tahun_produksi"required>
                    <option value="2011">2010</option>
                    <option value="2012">2011</option>
                    <option value="2013">2012</option>
                    <option value="2014">2013</option>
                    <option value="2015">2014</option>
                    <option value="2016">2015</option>
                    <option value="2017">2016</option>
                    <option value="2018">2017</option>
                    <option value="2019">2018</option>
                    <option value="2020">2019</option>
                    <option value="2021">2020</option>
                    <option value="2022">2021</option>
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